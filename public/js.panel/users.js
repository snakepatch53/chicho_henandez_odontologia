const forms = document.querySelectorAll(".needs-validation");
const $form = document.getElementById("element-lotteryform");
const $element_table_user = document.getElementById("element-table-user");

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
}

//functions
const handleFunction = {
    new: function () {
        uiFunction.modalForm_clear();
        $form.user_id.value = 0;
        bootstrap_modalform.show();
    },
    edit: function (user_id) {
        const user = uiFunction.database.find((el) => el.user_id == user_id);
        setValuesForm(user, $form);
        bootstrap_modalform.show();
    },
    delete: function (user_id) {
        $form.user_id.value = user_id;
        bootstrap_modalconfirm.show();
    },

    // gift functions
    giftTrButton: function (user_id) {
        $form_gift.user_id.value = user_id;
        uiFunction.refreshTableGift(user_id);
        element_modalgift.show();
    },
};

const crudFunction = {
    select: async function () {
        const formData = new FormData($form);
        await fetch_query(formData, "user", "select").then((res) => {
            uiFunction.database = res;
            uiFunction.refreshTable();
        });
    },
    insertUpdate: function (form) {
        const action = $form.user_id.value == 0 ? "insert" : "update";
        fetch_query(new FormData(form), "user", action).then((res) => {
            uiFunction.modalForm_hide();
            this.select();
        });
    },
    delete: function () {
        const formData = new FormData($form);
        fetch_query(formData, "user", "delete").then((res) => {
            uiFunction.modalForm_hide();
            this.select();
            uiFunction.modalConfirm_hide();
        });
    },
};

const uiFunction = {
    database: [],
    giftDatabase: [],
    getTruser: function ({ user_id, user_name, user_user }) {
        return `
            <tr id="lottery-tr-id-${user_id}">
                <td class="d-none d-md-table-cell fw-bold">${user_id}</td>
                <td class="text-center text-md-left">${user_name}</td>
                <td class="text-center text-md-left">${user_user}</td>
                <td class="text-center">
                    <button class="btn btn-outline-primary" onclick="handleFunction.edit(${user_id})">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-outline-danger" onclick="handleFunction.delete(${user_id})">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
        `;
    },
    refreshTable: function () {
        let html = "";
        for (let user of this.database) {
            html += this.getTruser(user);
        }
        $element_table_user.innerHTML = html;
    },
    modalForm_hide: function () {
        bootstrap_modalform.hide();
        this.modalForm_clear();
    },
    modalForm_clear: function () {
        $form.reset();
        $form.classList.remove("was-validated");
    },
    modalConfirm_hide: function () {
        bootstrap_modalconfirm.hide();
    },

    // gift functions
    refreshTableGift: function (user_id) {
        const gifts = uiFunction.giftDatabase.filter((el) => el.user_id == user_id);
        const $lottery_tr = document.getElementById("lottery-tr-id-" + user_id);
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
