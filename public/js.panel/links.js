const forms = document.querySelectorAll(".needs-validation");
const $form = document.getElementById("element-lotteryform");
const $element_table_link = document.getElementById("element-table-link");

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
        $form.link_id.value = 0;
        bootstrap_modalform.show();
    },
    edit: function (link_id) {
        const link = uiFunction.database.find((el) => el.link_id == link_id);
        setValuesForm(link, $form);
        bootstrap_modalform.show();
    },
    delete: function (link_id) {
        $form.link_id.value = link_id;
        bootstrap_modalconfirm.show();
    },

    // gift functions
    giftTrButton: function (link_id) {
        $form_gift.link_id.value = link_id;
        uiFunction.refreshTableGift(link_id);
        element_modalgift.show();
    },
};

const crudFunction = {
    select: async function () {
        await fetch_query(new FormData($form), "link", "select").then((res) => {
            uiFunction.database = res;
            uiFunction.refreshTable();
        });
    },
    insertUpdate: function (form) {
        const action = $form.link_id.value == 0 ? "insert" : "update";
        fetch_query(new FormData(form), "link", action).then((res) => {
            console.log(res);
            uiFunction.modalForm_hide();
            this.select();
        });
    },
    delete: function () {
        fetch_query(new FormData($form), "link", "delete").then((res) => {
            uiFunction.modalForm_hide();
            this.select();
            uiFunction.modalConfirm_hide();
        });
    },
};

const uiFunction = {
    database: [],
    giftDatabase: [],
    getTrlink: function ({ link_id, link_name, link_ref }) {
        if (link_ref.includes("localhost")) {
            link_ref = link_ref.replace("localhost/", `${$proyect.url}view/file.general/pdf/`);
        }
        return `
            <tr>
                <td class="d-none d-md-table-cell fw-bold">${link_id}</td>
                <td class="text-center text-md-left"><a href="${link_ref}"  class="link-primary" target="_blank">${link_name}</a></td>
                <td class="text-center">
                    <button class="btn btn-outline-primary" onclick="handleFunction.edit(${link_id})">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-outline-danger" onclick="handleFunction.delete(${link_id})">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
        `;
    },
    refreshTable: function () {
        let html = "";
        for (let link of this.database) {
            html += this.getTrlink(link);
        }
        $element_table_link.innerHTML = html;
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
    refreshTableGift: function (link_id) {
        const gifts = uiFunction.giftDatabase.filter((el) => el.link_id == link_id);
        const $lottery_tr = document.getElementById("lottery-tr-id-" + link_id);
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
