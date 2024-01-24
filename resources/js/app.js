// import './bootstrap';
const btnShowFormLogincheckout = document.querySelector(
    ".accordion__showlogin"
);

if (btnShowFormLogincheckout) {
    const formLogincheckout = document.getElementById("checkout__login-form");
    const divContainerFormLogincheckout = document.querySelector(
        ".accordion__login-form"
    );

    btnShowFormLogincheckout.onclick = () => {
        if (formLogincheckout.style.maxHeight) {
            formLogincheckout.style.maxHeight = null;
            divContainerFormLogincheckout.style.maxHeight = null;
            divContainerFormLogincheckout.style.marginBottom = 0;
        } else {
            formLogincheckout.style.maxHeight =
                formLogincheckout.scrollHeight + "px";
            divContainerFormLogincheckout.style.maxHeight =
                formLogincheckout.scrollHeight + "px";
            divContainerFormLogincheckout.style.marginBottom = "20px";
        }
    };
}

const btnshowCoupon = document.querySelector(".accordion__showcoupon");

if (btnshowCoupon) {
    const formCoupon = document.querySelector(".coupon__form");
    const divFormCoupon = document.querySelector(".accordion__formcoupon");

    btnshowCoupon.onclick = () => {
        if (formCoupon.style.maxHeight) {
            formCoupon.style.maxHeight = null;
            divFormCoupon.style.maxHeight = null;
        } else {
            formCoupon.style.maxHeight = formCoupon.scrollHeight + "px";
            divFormCoupon.style.maxHeight = formCoupon.scrollHeight + "px";
        }
    };
}

const checkboxCreateAccount = document.querySelector(
    ".account__checkbox--input"
);

if (checkboxCreateAccount) {
    const formCreateAccount = document.querySelector(".create__account--form");

    checkboxCreateAccount.onclick = (e) => {
        if (e.target.checked) {
            formCreateAccount.style.maxHeight =
                formCreateAccount.scrollHeight + "px";
        } else {
            formCreateAccount.style.maxHeight = null;
        }
    };
}

const checkboxShipToDiffAddress = document.querySelector(
    ".shiptoaddress__checkbox--input"
);

if (checkboxShipToDiffAddress) {
    const formShipToDiffAddress = document.querySelector(
        ".shiptoaddress__form"
    );

    checkboxShipToDiffAddress.onclick = (e) => {
        if (e.target.checked) {
            formShipToDiffAddress.style.maxHeight =
                formShipToDiffAddress.scrollHeight + "px";
        } else {
            formShipToDiffAddress.style.maxHeight = null;
        }
    };
}

const btnsubmit2form = document.querySelector(".method__payment--btn");

if (btnsubmit2form) {
    const formbilling = document.querySelector(".form__billing");
    const formdiffaddress = document.querySelector(".shiptoaddress__form");

    btnsubmit2form.onclick = () => {
        if (checkboxShipToDiffAddress.checked) {
            formbilling.submit();
            formdiffaddress.submit();
        } else {
            formbilling.submit();
        }
    };
}

var coll = document.getElementsByClassName("collapsible");
var i;

if (coll) {
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
}

// Get the button

// When the user scrolls down 20px from the top of the document, show the button

// login form

$(document).ready(function () {
    if ($("#loginForm").length) {
        $("#loginForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                user: {
                    required: true,
                    maxlength: 15,
                },
                password: {
                    required: true,
                    minlength: 8,
                },
            },
        });
    }
});

$(document).ready(function () {
    if ($(".banner").length) {
        $(".banner").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
            nav: false,
        });
    }
    if ($(".branch-slider").length) {
        $(".branch-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });
    }
    if ($(".new-products-slider").length) {
        $(".new-products-slider").owlCarousel({
            items: 5,
            loop: true,
            autoplay: false,
            dots: true,
            nav: true,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
                1200: {
                    items: 5,
                },
            },
        });
    }
    if ($(".category-product-slider").length) {
        $(".category-product-slider").owlCarousel({
            items: 1,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 4000,
        });
    }
    if ($(".product-slider").length) {
        $(".product-slider").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            dots: true,
            nav: true,
            responsive: {
                0: {
                    items: 2,
                },
                300: {
                    items: 2,
                },
                500: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1000: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
            },
        });
    }

    $(".blog-slider").owlCarousel({
        loop: true,
        margin: 0,
        dots: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 1000,
        responsiveClass: true,
        // responsive: {
        //   0: {
        //     items: 1,
        //     nav: true,
        //   },
        //   600: {
        //     items: 3,
        //     nav: false,
        //   },
        //   1000: {
        //     items: 5,
        //     nav: true,
        //     loop: false,
        //   },
        // },
    });
    var btn = $("#btn-go-to-top");
    if (btn.length) {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass("show");
            } else {
                btn.removeClass("show");
            }
        });

        btn.on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "300");
        });
    }
});

$(document).ready(function () {
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1
        .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: true,
            dots: false,
            loop: true,
            autoplayHoverPause: true,
            responsiveRefreshRate: 200,
        })
        .on("changed.owl.carousel", syncPosition);

    sync2
        .on("initialized.owl.carousel", function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: false,
            autoplayHoverPause: true,
            nav: false,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100,
        })
        .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find(".owl-item.active").length - 1;
        var start = sync2.find(".owl-item.active").first().index();
        var end = sync2.find(".owl-item.active").last().index();

        if (current > end) {
            sync2.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
            sync2.data("owl.carousel").to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data("owl.carousel").to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data("owl.carousel").to(number, 300, true);
    });
});

// collapse product-detail

const btnDetail = document.querySelector(".detail--btn");
const btnView3 = document.querySelector(".review3--btn");

if (btnDetail && btnView3) {
    const view3Content = document.querySelector(".review3--content");
    const detailContent = document.querySelector(".detail--content");

    btnDetail.onclick = (e) => {
        btnView3.style.backgroundColor = "#fff";
        btnView3.style.color = "#333";

        e.target.style.backgroundColor = "#80bb35";
        e.target.style.color = "#fff";

        view3Content.style.display = "none";
        detailContent.style.display = "block";
    };

    btnView3.onclick = (e) => {
        btnDetail.style.backgroundColor = "#fff";
        btnDetail.style.color = "#333";

        e.target.style.backgroundColor = "#80bb35";
        e.target.style.color = "#fff";

        detailContent.style.display = "none";
        view3Content.style.display = "block";
    };
}

if ($(".related-slider").length) {
    $(".related-slider").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        margin: 10,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
}

if ($(".upsell-slider").length) {
    $(".upsell-slider").owlCarousel({
        loop: true,
        nav: true,
        autoplayHoverPause: true,
        dots: false,
        margin: 10,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
}

let link_list_grid = document.querySelectorAll(".filter__buttons button");
let view_wraps = document.querySelectorAll(".view-wraps");
let list_view = document.querySelector(".list-view");
let grid_view = document.querySelector(".grid-view");

link_list_grid.forEach(function (link) {
    link.addEventListener("click", function () {
        link_list_grid.forEach(function (link) {
            link.classList.remove("active");
        });

        link.classList.add("active");

        let li_view = link.getAttribute("data-view");

        view_wraps.forEach(function (view) {
            view.style.display = "none";
        });

        if (li_view == "grid-view") {
            list_view.style.display = "block";
        } else {
            grid_view.style.display = "block";
        }
    });
});

var minPrice = localStorage.getItem("min_price");
var maxPrice = localStorage.getItem("max_price");
var orderBy = localStorage.getItem("orderBy");

if (minPrice && maxPrice) {
    document.getElementById("min_price").value = minPrice;
    document.getElementById("max_price").value = maxPrice;
}

if (orderBy) {
    $("#order_by option").each(function () {
        if ($(this).val() == orderBy) {
            $(this).prop("selected", true);
        }
    });
}
$("#price-form").on("submit", function () {
    var minPrice = document.getElementById("min_price").value;
    var maxPrice = document.getElementById("max_price").value;
    localStorage.setItem("min_price", minPrice);
    localStorage.setItem("max_price", maxPrice);

    var orderForm = document.getElementById("order-form");
    var minPriceField = document.createElement("input");
    minPriceField.type = "hidden";
    minPriceField.name = "min_price";
    minPriceField.value = minPrice;
    orderForm.appendChild(minPriceField);
    var maxPriceField = document.createElement("input");
    maxPriceField.type = "hidden";
    maxPriceField.name = "max_price";
    maxPriceField.value = maxPrice;
    orderForm.appendChild(maxPriceField);
});

var orderForm = document.getElementById("order-form");
var priceForm = document.getElementById("price-form");
$("#order_by").change(function () {
    var orderBy = $(this).val();
    localStorage.setItem("orderBy", orderBy);
    orderForm.submit();
    submitting = true;
});
if (localStorage.getItem("min_price") !== null) {
    var minPriceField = document.createElement("input");
    minPriceField.type = "hidden";
    minPriceField.name = "min_price";
    minPriceField.value = localStorage.getItem("min_price");
    orderForm.appendChild(minPriceField);
}
if (localStorage.getItem("max_price") !== null) {
    var maxPriceField = document.createElement("input");
    maxPriceField.type = "hidden";
    maxPriceField.name = "max_price";
    maxPriceField.value = localStorage.getItem("max_price");
    orderForm.appendChild(maxPriceField);
}
if (localStorage.getItem("orderBy") !== null) {
    var orderByField = document.createElement("input");
    orderByField.type = "hidden";
    orderByField.name = "order_by";
    orderByField.value = localStorage.getItem("orderBy");
    priceForm.appendChild(orderByField);
}
var submitting = false;

$("form").on("submit", function () {
    submitting = true;
});

window.addEventListener("beforeunload", function (event) {
    if (!submitting) {
        localStorage.clear();
    }
});

$(document).ready(function () {
    $(".addToCartButton").click(function (e) {
        e.preventDefault();
        var product_id = $(this).attr("data-id");
        var product_qty = $(this).prev().val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                product_id: product_id,
                product_qty: product_qty,
            },
            success: function (response) {
                // console.log(response.status)
                Swal.fire({
                    icon: "success",
                    title: "Xong!",
                    text: response.status,
                    confirmButtonText: "Đồng ý",
                    confirmButtonColor: "#2661ec",
                }).then((result) => {
                    $(".cart-count").text(response.count);
                });
            },
        });
    });
});
$(document).ready(function () {
    $("#update-cart-btn").click(function (e) {
        e.preventDefault();

        // Lấy thông tin về sản phẩm từ các input trong bảng
        var products = [];
        $("table tbody tr").each(function () {
            var rowId = $(this).find(".deleteCartItem").data("id");
            var qty = $(this).find(".cart-table--quality input").val();
            products.push({
                rowId: rowId,
                qty: qty,
            });
        });
        console.log(products);
        // Gửi Ajax để cập nhật giỏ hàng

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "update-cart",
            data: {
                products: products,
            },
            success: function (response) {
                if (response.status == "success") {
                    Swal.fire({
                        icon: "success",
                        title: "Xong!",
                        text: "Cập nhật giỏ hàng thành công",
                        confirmButtonText: "Đồng ý!",
                        confirmButtonColor: "#2661ec",
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        location.reload();
                    });
                }
            },
        });
    });
    $(".deleteCartItem").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var rowId = $(this).attr("data-id");
        console.log(rowId);
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                rowId: rowId,
            },
            success: function (response) {
                Swal.fire({
                    icon: "success",
                    title: "Xong!",
                    text: response.status,
                    confirmButtonText: "Đồng ý!",
                    confirmButtonColor: "#2661ec",
                }).then((result) => {
                    location.reload();
                });
            },
        });
    });
});
