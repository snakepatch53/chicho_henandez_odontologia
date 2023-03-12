const $form = document.getElementById("element-form");
const $element_gallery = document.getElementById("element-gallery");

// bootstrap instances
const bootstrap_modalconfirm = new bootstrap.Modal(document.getElementById("element-modalconfirm"), {
    keyboard: false,
});

async function main() {
    await crudFunction.select();
    $form.slider_img.onchange = () => crudFunction.insert();
}

//functions
const handleFunction = {
    delete: function (slider_id) {
        $form.slider_id.value = slider_id;
        bootstrap_modalconfirm.show();
    },
};

const crudFunction = {
    select: async function () {
        await fetch_query(new FormData($form), "slider", "select").then((res) => {
            uiFunction.database = res;
            uiFunction.refreshTable();
        });
    },
    insert: function () {
        fetch_query(new FormData($form), "slider", "insert").then((res) => {
            this.select();
        });
    },
    delete: function () {
        fetch_query(new FormData($form), "slider", "delete").then((res) => {
            uiFunction.modalForm_hide();
            this.select();
        });
    },
};

const uiFunction = {
    database: [],
    giftDatabase: [],
    getTrslider: function ({ slider_id, slider_img }) {
        return `
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <img src="${$proyect.url}view/file.general/slider_img/${slider_img}" class="card-img slider-img" alt="...">
                        <button class="btn btn-warning mt-2" style="width:100%" onclick="handleFunction.delete(${slider_id})">
                            <i class="fa-solid fa-trash"></i>
                            <span>Eliminar</span>
                        </button>
                    </div>
                </div>
            </div>
        `;
    },
    refreshTable: function () {
        let html = "";
        for (let slider of this.database) {
            html += this.getTrslider(slider);
        }
        $element_gallery.innerHTML = html;
    },
    modalForm_hide: function () {
        bootstrap_modalconfirm.hide();
    },
};

main();
