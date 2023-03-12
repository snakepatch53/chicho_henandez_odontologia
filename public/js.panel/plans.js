const forms = document.querySelectorAll(".needs-validation");
const $form = document.getElementById("element-lotteryform");
const $element_table_plan = document.getElementById("element-table-plan");
const $checkboxiva = document.getElementById("checkboxiva");

// bootstrap instances
const bootstrap_modalform = new bootstrap.Modal(document.getElementById("element-modalform"), {
    keyboard: false,
});
const bootstrap_modalconfirm = new bootstrap.Modal(document.getElementById("element-modalconfirm"), {
    keyboard: false,
});

async function main() {
    await crudFunction.select();
    $form.addEventListener(
        "submit",
        function (event) {
            if (!$form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            if ($form.checkValidity()) {
                event.preventDefault();
                crudFunction.insertUpdate($form);
            }

            $form.classList.add("was-validated");
        },
        false
    );
    $checkboxiva.onclick = () => {
        const $field = $form.plan_price_iva;
        $field.value = $field.value == "1" || $field.value == "true" ? "false" : "true";
    };
}

//functions
const handleFunction = {
    new: function () {
        uiFunction.modalForm_clear();
        $form.plan_id.value = 0;
        bootstrap_modalform.show();
    },
    edit: function (plan_id) {
        const plan = uiFunction.database.find((el) => el.plan_id == plan_id);
        setValuesForm(plan, $form);
        bootstrap_modalform.show();
    },
    delete: function (plan_id) {
        $form.plan_id.value = plan_id;
        bootstrap_modalconfirm.show();
    },

    // gift functions
    giftTrButton: function (plan_id) {
        $form_gift.plan_id.value = plan_id;
        uiFunction.refreshTableGift(plan_id);
        element_modalgift.show();
    },
};

const crudFunction = {
    select: async function () {
        const formData = new FormData($form);
        await fetch_query(formData, "plan", "select").then((res) => {
            uiFunction.database = res;
            uiFunction.refreshTable();
        });
    },
    insertUpdate: function (form) {
        const $field_iva = form.plan_price_iva.value;
        const formData = new FormData(form);
        formData.append("plan_price_iva", $field_iva == "true" || $field_iva == "1" ? 1 : 0);
        const action = $form.plan_id.value == 0 ? "insert" : "update";
        fetch_query(formData, "plan", action).then((res) => {
            uiFunction.modalForm_hide();
            this.select();
        });
    },
    delete: function () {
        const formData = new FormData($form);
        fetch_query(formData, "plan", "delete").then((res) => {
            uiFunction.modalForm_hide();
            this.select();
            uiFunction.modalConfirm_hide();
        });
    },
};

const uiFunction = {
    database: [],
    giftDatabase: [],
    getTrplan: function ({ plan_id, plan_name, plan_icon, plan_speed_value, plan_price_value }) {
        return `
            <tr id="lottery-tr-id-${plan_id}">
                <td class="d-none d-md-table-cell fw-bold">${plan_id}</td>
                <td class="text-center text-md-left">${plan_name}</td>
                <td class="text-center text-md-left">${plan_icon}</td>
                <td class="d-none d-md-table-cell">${plan_speed_value}</td>
                <td class="d-none d-md-table-cell">$${plan_price_value}</td>
                <td class="text-center">
                    <button class="btn btn-outline-primary" onclick="handleFunction.edit(${plan_id})">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-outline-danger" onclick="handleFunction.delete(${plan_id})">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
        `;
    },
    refreshTable: function () {
        let html = "";
        for (let plan of this.database) {
            html += this.getTrplan(plan);
        }
        $element_table_plan.innerHTML = html;
    },
    modalForm_hide: function () {
        bootstrap_modalform.hide();
        this.modalForm_clear();
    },
    modalForm_clear: function () {
        $form.reset();
        $form.plan_price_iva.value = "";
        $form.classList.remove("was-validated");
    },
    modalConfirm_hide: function () {
        bootstrap_modalconfirm.hide();
    },

    // gift functions
    refreshTableGift: function (plan_id) {
        const gifts = uiFunction.giftDatabase.filter((el) => el.plan_id == plan_id);
        const $lottery_tr = document.getElementById("lottery-tr-id-" + plan_id);
        const $lottery_span = $lottery_tr.querySelector(".lottery-play-span");
        const $lottery_a = $lottery_tr.querySelector(".lottery-play-a");

        const lottery_button_a = new bootstrap.Button($lottery_a);
        const lottery_tooltip_span = new bootstrap.Tooltip($lottery_span, {
            boundary: document.body,
        });
        if (gifts.length <= 0) {
            // disable button, enable tooltip
            lottery_tooltip_span.enable();
            $lottery_a.classList.add("disabled");
        } else {
            // enable button, disable tooltip
            lottery_tooltip_span.disable();
            $lottery_a.classList.remove("disabled");
        }
        let html = "";
        for (let gift of gifts) {
            html += this.getTrGift(gift);
        }
        $element_table_gift.innerHTML = html;
    },
};

main();
