<style>
    <style type="text/css">.swal-icon--error {
        border-color: #f27474;
        -webkit-animation: animateErrorIcon .5s;
        animation: animateErrorIcon .5s
    }

    .swal-icon--error__x-mark {
        position: relative;
        display: block;
        -webkit-animation: animateXMark .5s;
        animation: animateXMark .5s
    }

    .swal-icon--error__line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #f27474;
        display: block;
        top: 37px;
        border-radius: 2px
    }

    .swal-icon--error__line--left {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 17px
    }

    .swal-icon--error__line--right {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 16px
    }

    @-webkit-keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @-webkit-keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    .swal-icon--warning {
        border-color: #f8bb86;
        -webkit-animation: pulseWarning .75s infinite alternate;
        animation: pulseWarning .75s infinite alternate
    }

    .swal-icon--warning__body {
        width: 5px;
        height: 47px;
        top: 10px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--warning__body,
    .swal-icon--warning__dot {
        position: absolute;
        left: 50%;
        background-color: #f8bb86
    }

    .swal-icon--warning__dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -4px;
        bottom: -11px
    }

    @-webkit-keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    @keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    .swal-icon--success {
        border-color: #a5dc86
    }

    .swal-icon--success:after,
    .swal-icon--success:before {
        content: "";
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        background: #fff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .swal-icon--success:before {
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        transform-origin: 60px 60px
    }

    .swal-icon--success:after {
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 60px;
        transform-origin: 0 60px;
        -webkit-animation: rotatePlaceholder 4.25s ease-in;
        animation: rotatePlaceholder 4.25s ease-in
    }

    .swal-icon--success__ring {
        width: 80px;
        height: 80px;
        border: 4px solid hsla(98, 55%, 69%, .2);
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2
    }

    .swal-icon--success__hide-corners {
        width: 5px;
        height: 90px;
        background-color: #fff;
        padding: 1px;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .swal-icon--success__line {
        height: 5px;
        background-color: #a5dc86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2
    }

    .swal-icon--success__line--tip {
        width: 25px;
        left: 14px;
        top: 46px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-animation: animateSuccessTip .75s;
        animation: animateSuccessTip .75s
    }

    .swal-icon--success__line--long {
        width: 47px;
        right: 8px;
        top: 38px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-animation: animateSuccessLong .75s;
        animation: animateSuccessLong .75s
    }

    @-webkit-keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @-webkit-keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @-webkit-keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    @keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    .swal-icon--info {
        border-color: #c9dae1
    }

    .swal-icon--info:before {
        width: 5px;
        height: 29px;
        bottom: 17px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--info:after,
    .swal-icon--info:before {
        content: "";
        position: absolute;
        left: 50%;
        background-color: #c9dae1
    }

    .swal-icon--info:after {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        top: 19px
    }

    .swal-icon {
        width: 80px;
        height: 80px;
        border-width: 4px;
        border-style: solid;
        border-radius: 50%;
        padding: 0;
        position: relative;
        box-sizing: content-box;
        margin: 20px auto
    }

    .swal-icon:first-child {
        margin-top: 32px
    }

    .swal-icon--custom {
        width: auto;
        height: auto;
        max-width: 100%;
        border: none;
        border-radius: 0
    }

    .swal-icon img {
        max-width: 100%;
        max-height: 100%
    }

    .swal-title {
        color: rgba(0, 0, 0, .65);
        font-weight: 600;
        text-transform: none;
        position: relative;
        display: block;
        padding: 13px 16px;
        font-size: 27px;
        line-height: normal;
        text-align: center;
        margin-bottom: 0
    }

    .swal-title:first-child {
        margin-top: 26px
    }

    .swal-title:not(:first-child) {
        padding-bottom: 0
    }

    .swal-title:not(:last-child) {
        margin-bottom: 13px
    }

    .swal-text {
        font-size: 16px;
        position: relative;
        float: none;
        line-height: normal;
        vertical-align: top;
        text-align: left;
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        font-weight: 400;
        color: rgba(0, 0, 0, .64);
        max-width: calc(100% - 20px);
        overflow-wrap: break-word;
        box-sizing: border-box
    }

    .swal-text:first-child {
        margin-top: 45px
    }

    .swal-text:last-child {
        margin-bottom: 45px
    }

    .swal-footer {
        text-align: right;
        padding-top: 13px;
        margin-top: 13px;
        padding: 13px 16px;
        border-radius: inherit;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .swal-button-container {
        margin: 5px;
        display: inline-block;
        position: relative
    }

    .swal-button {
        background-color: #7cd1f9;
        color: #fff;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        margin: 0;
        cursor: pointer
    }

    .swal-button:not([disabled]):hover {
        background-color: #78cbf2
    }

    .swal-button:active {
        background-color: #70bce0
    }

    .swal-button:focus {
        outline: none;
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
    }

    .swal-button[disabled] {
        opacity: .5;
        cursor: default
    }

    .swal-button::-moz-focus-inner {
        border: 0
    }

    .swal-button--cancel {
        color: #555;
        background-color: #efefef
    }

    .swal-button--cancel:not([disabled]):hover {
        background-color: #e8e8e8
    }

    .swal-button--cancel:active {
        background-color: #d7d7d7
    }

    .swal-button--cancel:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
    }

    .swal-button--danger {
        background-color: #e64942
    }

    .swal-button--danger:not([disabled]):hover {
        background-color: #df4740
    }

    .swal-button--danger:active {
        background-color: #cf423b
    }

    .swal-button--danger:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
    }

    .swal-content {
        padding: 0 20px;
        margin-top: 20px;
        font-size: medium
    }

    .swal-content:last-child {
        margin-bottom: 20px
    }

    .swal-content__input,
    .swal-content__textarea {
        -webkit-appearance: none;
        background-color: #fff;
        border: none;
        font-size: 14px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, .14);
        padding: 10px 13px;
        border-radius: 2px;
        transition: border-color .2s
    }

    .swal-content__input:focus,
    .swal-content__textarea:focus {
        outline: none;
        border-color: #6db8ff
    }

    .swal-content__textarea {
        resize: vertical
    }

    .swal-button--loading {
        color: transparent
    }

    .swal-button--loading~.swal-button__loader {
        opacity: 1
    }

    .swal-button__loader {
        position: absolute;
        height: auto;
        width: 43px;
        z-index: 2;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        text-align: center;
        pointer-events: none;
        opacity: 0
    }

    .swal-button__loader div {
        display: inline-block;
        float: none;
        vertical-align: baseline;
        width: 9px;
        height: 9px;
        padding: 0;
        border: none;
        margin: 2px;
        opacity: .4;
        border-radius: 7px;
        background-color: hsla(0, 0%, 100%, .9);
        transition: background .2s;
        -webkit-animation: swal-loading-anim 1s infinite;
        animation: swal-loading-anim 1s infinite
    }

    .swal-button__loader div:nth-child(3n+2) {
        -webkit-animation-delay: .15s;
        animation-delay: .15s
    }

    .swal-button__loader div:nth-child(3n+3) {
        -webkit-animation-delay: .3s;
        animation-delay: .3s
    }

    @-webkit-keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    @keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    .swal-overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 0;
        overflow-y: auto;
        background-color: rgba(0, 0, 0, .4);
        z-index: 10000;
        pointer-events: none;
        opacity: 0;
        transition: opacity .3s
    }

    .swal-overlay:before {
        content: " ";
        display: inline-block;
        vertical-align: middle;
        height: 100%
    }

    .swal-overlay--show-modal {
        opacity: 1;
        pointer-events: auto
    }

    .swal-overlay--show-modal .swal-modal {
        opacity: 1;
        pointer-events: auto;
        box-sizing: border-box;
        -webkit-animation: showSweetAlert .3s;
        animation: showSweetAlert .3s;
        will-change: transform
    }

    .swal-modal {
        width: 478px;
        opacity: 0;
        pointer-events: none;
        background-color: #fff;
        text-align: center;
        border-radius: 5px;
        position: static;
        margin: 20px auto;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        z-index: 10001;
        transition: opacity .2s, -webkit-transform .3s;
        transition: transform .3s, opacity .2s;
        transition: transform .3s, opacity .2s, -webkit-transform .3s
    }

    @media (max-width:500px) {
        .swal-modal {
            width: calc(100% - 20px)
        }
    }

    @-webkit-keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

</style>
</style>




<div id="bestProperty" class="Style_maindiv__39eoG">
    <div class="Style_secdiv__1iTRk">
        <div class="Style_secdivtxt__-D_1E">
            <h3> Best properties for you </h3>
        </div>
        <div class="Style_sul__Xau_D">
            <ul>
                <li title="All" class="active_bestProperties" id="allBtn"><button
                        class="MuiButtonBase-root MuiButton-root jss27 MuiButton-contained jss28" tabindex="0"
                        type="button"><span class="MuiButton-label">All</span><span
                            class="MuiTouchRipple-root"></span></button></li>
                <li title="Residential" id="resBtn"><button
                        class="MuiButtonBase-root MuiButton-root jss27 MuiButton-contained jss28" tabindex="0"
                        type="button"><span class="MuiButton-label">Residential</span><span
                            class="MuiTouchRipple-root"></span></button></li>
                <li title="Commercial" id="comBtn"><button
                        class="MuiButtonBase-root MuiButton-root jss27 MuiButton-contained jss28" tabindex="0"
                        type="button"><span class="MuiButton-label">Commercial</span><span
                            class="MuiTouchRipple-root"></span></button></li>
                <li title="Industrial" id="indBtn"><button
                        class="MuiButtonBase-root MuiButton-root jss27 MuiButton-contained jss28" tabindex="0"
                        type="button"><span class="MuiButton-label">Industrial</span><span
                            class="MuiTouchRipple-root"></span></button></li>
                <li title="View all" class="Style_viewall__xx_lL"><button
                        class="MuiButtonBase-root MuiButton-root jss27 MuiButton-outlined" tabindex="0"
                        type="button"><span class="MuiButton-label">View all</span><span
                            class="MuiTouchRipple-root"></span></button></li>
            </ul>
        </div>
    </div><br>
    <div class="Style_mapCardContainer__2C6bq">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_14C-10387"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623221898png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 23 minutes ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_14C-10387">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 14C</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 39 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">125 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_14C-10387"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6D-10386"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623221683png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 26 minutes ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6D-10386">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 6D</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 59 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">200 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6D-10386"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_3,_Gadap_Town-10385"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623221479png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 30 minutes ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_3,_Gadap_Town-10385">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 3, Gadap
                                            Town</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 70 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">200 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_3,_Gadap_Town-10385"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_8A-10384"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623221210png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 34 minutes ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_8A-10384">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 8A</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 75 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">300 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_8A-10384"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_4C-10383"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623220971png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 38 minutes ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_4C-10383">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 4C</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 76 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">300 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_4C-10383"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_2C-10382"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623220755png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 42 minutes ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_2C-10382">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 2C</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 85 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">300 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_2C-10382"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_14C-10381"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623220487png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_14C-10381">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 14C</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 88 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_14C-10381"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_12c-10380"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623220307png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_12c-10380">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 12c</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 94 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_12c-10380"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sscttor_9A-10379"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623219864png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sscttor_9A-10379">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sscttor 9A</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 96 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sscttor_9A-10379"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_7,_Gadap_Town-10378"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623219630png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_7,_Gadap_Town-10378">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 7, Gadap
                                            Town</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 96 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_7,_Gadap_Town-10378"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Secror_7A-10377"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623219437png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Secror_7A-10377">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Secror 7A</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 1 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Secror_7A-10377"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_8A-10376"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623219216png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_8A-10376">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 8A</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 1.85 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">1000 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_8A-10376"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_5D-10375"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623218940png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_5D-10375">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA City Sector 5D</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 2.25 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">1000 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_5D-10375"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10374"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623218109png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10374">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 8</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 17 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">1000 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10374"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_6-10373"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623217944png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> an hour ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_6-10373">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 6</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 7 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_6-10373"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8_Ext-10372"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623217770png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> 2 hours ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8_Ext-10372">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 8 Ext</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 5 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8_Ext-10372"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_6-10371"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623217252png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> 2 hours ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_6-10371">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 6</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 4.75 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_6-10371"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_7-10370"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623217044png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> 2 hours ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_7-10370">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 7</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 8.75 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_7-10370"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10369"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623216842png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> 2 hours ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10369">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 8</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 6.5 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">100 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10369"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_7-10368"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623216685png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 hours ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_7-10368">
                                    <p style="font-size: 16px;"><strong> Bungalow For Sale in DHA Phase 7</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 9.5 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn1__1tH1a"><svg class="Style_pro_bed__2P17S"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>&nbsp; &nbsp;<span class="Style_bed_count__1fkhV">5</span></div>
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">500 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_7-10368"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10367"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623216518png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Commercial</p>
                                <p> 2 hours ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10367">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 8</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 7 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">100 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-commercial-plot-for_sale-DHA-Phase_8-10367"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_2-10365"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623071034png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_2-10365">
                                    <p style="font-size: 16px;"><strong> Bungalow For Sale in DHA Phase 2</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 20 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn1__1tH1a"><svg class="Style_pro_bed__2P17S"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>&nbsp; &nbsp;<span class="Style_bed_count__1fkhV">6</span></div>
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">1000 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_2-10365"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_6-10364"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623070869png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_6-10364">
                                    <p style="font-size: 16px;"><strong> Bungalow For Sale in DHA Phase 6</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 18 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn1__1tH1a"><svg class="Style_pro_bed__2P17S"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>&nbsp; &nbsp;<span class="Style_bed_count__1fkhV">5</span></div>
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">1000 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_6-10364"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_6-10362"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623069614png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_6-10362">
                                    <p style="font-size: 16px;"><strong> Bungalow For Sale in DHA Phase 6</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 20 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn1__1tH1a"><svg class="Style_pro_bed__2P17S"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>&nbsp; &nbsp;<span class="Style_bed_count__1fkhV">9</span></div>
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">1000 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-bungalow-for_sale-DHA-Phase_6-10362"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-plot-for_sale-DHA-Phase_8_Ext-10361"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623069314png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA-Phase_8_Ext-10361">
                                    <p style="font-size: 16px;"><strong> Plot For Sale in DHA Phase 8 Ext</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 4.15 Cr.</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">300 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-plot-for_sale-DHA-Phase_8_Ext-10361"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-flat-for_sale-Clifton-Frere_Town-10360"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623068913png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-flat-for_sale-Clifton-Frere_Town-10360">
                                    <p style="font-size: 16px;"><strong> Flat For Sale in Clifton Frere Town</strong>
                                    </p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: On Request</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">2000 Sq.ft</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-flat-for_sale-Clifton-Frere_Town-10360"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-flat-for_sale-Jamshed_Town-Soldier_Bazar-10359"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623068469png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-flat-for_sale-Jamshed_Town-Soldier_Bazar-10359">
                                    <p style="font-size: 16px;"><strong> Flat For Sale in Jamshed Town Soldier
                                            Bazar</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 36 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn1__1tH1a"><svg class="Style_pro_bed__2P17S"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>&nbsp; &nbsp;<span class="Style_bed_count__1fkhV">2</span></div>
                                <div class="Style_icn2__1bWa2"><svg class="Style_pro_bath__211eG"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z">
                                        </path>
                                    </svg><span class="Style_bath_count__3PVqa">1</span></div>
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">75 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-flat-for_sale-Jamshed_Town-Soldier_Bazar-10359"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-4 mb-4">
                    <div></div>
                    <div class="Style_maindiv__1aBho Style_totalWidth__3vKIe">
                        <div class="Style_img_div__2wG9Z"><a
                                href="/propertyDetail/karachi-residential-flat-for_sale-Jamshed_Town-Soldier_Bazar-10358"><img
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1623068191png"
                                    width="100%" height="90%" title="properties for sale" alt="properties for sale"></a>
                            <div class="Style_sale__19ykp"> For Sale </div>
                            <div class="Style_ptxt1__3M7at">
                                <p>Residential</p>
                                <p> 2 days ago </p>
                            </div>
                        </div>
                        <div class="Style_mainchild__OhnI1">
                            <div class="Style_ptxt2__1CSQr"><a
                                    href="/propertyDetail/karachi-residential-flat-for_sale-Jamshed_Town-Soldier_Bazar-10358">
                                    <p style="font-size: 16px;"><strong> Flat For Sale in Jamshed Town Soldier
                                            Bazar</strong></p>
                                </a><b>
                                    <p
                                        style="font-size: 16px; color: rgb(214, 63, 63); margin-top: -15px; margin-bottom: 5px;">
                                        Rs: 33 Lacs</p>
                                </b></div>
                            <div class="Style_icn_container__1JFET">
                                <div class="Style_icn1__1tH1a"><svg class="Style_pro_bed__2P17S"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>&nbsp; &nbsp;<span class="Style_bed_count__1fkhV">2</span></div>
                                <div class="Style_icn2__1bWa2"><svg class="Style_pro_bath__211eG"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z">
                                        </path>
                                    </svg><span class="Style_bath_count__3PVqa">1</span></div>
                                <div class="Style_icn3__3DKIv"><img class="Style_pro_area__OBTIC"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        alt="area"><span class="Style_area_count__1_QqF">37 Yards</span></div>
                            </div>
                            <div class="Style_btndiv__36ojy"><a
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-contained Style_VMBtn__ERtZP"
                                    tabindex="0" role="button" aria-disabled="false"
                                    href="/propertyDetail/karachi-residential-flat-for_sale-Jamshed_Town-Soldier_Bazar-10358"><span
                                        class="MuiButton-label">View more</span><span
                                        class="MuiTouchRipple-root"></span></a><button
                                    class="MuiButtonBase-root MuiButton-root jss51 MuiButton-text" tabindex="0"
                                    type="button"><span class="MuiButton-label">Contact Us</span><span
                                        class="MuiTouchRipple-root"></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
