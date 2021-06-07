<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .swal-icon--error {
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
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
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
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
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
            outline: 0;
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
            outline: 0;
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
    <link href="/favicon.ico" rel="icon">
    <meta content="width=device-width,initial-scale=1,user-scalable=0" name="viewport">
    <meta charset="utf-8">
    <meta content="#007BFF" name="theme-color">
    <link href="{{ asset('/manifest.json') }}" rel="manifest">
    <link href="https://chhatt.com/" rel="canonical" data-basehost="chhatt.com" data-baseprotocol="https:">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <style data-jss="" data-meta="MuiTouchRipple">
        .MuiTouchRipple-root {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            overflow: hidden;
            position: absolute;
            border-radius: inherit;
            pointer-events: none
        }

        .MuiTouchRipple-ripple {
            opacity: 0;
            position: absolute
        }

        .MuiTouchRipple-rippleVisible {
            opacity: .3;
            animation: MuiTouchRipple-keyframes-enter 550ms cubic-bezier(.4, 0, .2, 1);
            transform: scale(1)
        }

        .MuiTouchRipple-ripplePulsate {
            animation-duration: .2s
        }

        .MuiTouchRipple-child {
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
            border-radius: 50%;
            background-color: currentColor
        }

        .MuiTouchRipple-childLeaving {
            opacity: 0;
            animation: MuiTouchRipple-keyframes-exit 550ms cubic-bezier(.4, 0, .2, 1)
        }

        .MuiTouchRipple-childPulsate {
            top: 0;
            left: 0;
            position: absolute;
            animation: MuiTouchRipple-keyframes-pulsate 2.5s cubic-bezier(.4, 0, .2, 1) .2s infinite
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-enter {
            0% {
                opacity: .1;
                transform: scale(0)
            }
            100% {
                opacity: .3;
                transform: scale(1)
            }
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-exit {
            0% {
                opacity: 1
            }
            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-pulsate {
            0% {
                transform: scale(1)
            }
            50% {
                transform: scale(.92)
            }
            100% {
                transform: scale(1)
            }
        }
    </style>
    <style data-jss="" data-meta="MuiButtonBase">
        .MuiButtonBase-root {
            color: inherit;
            border: 0;
            cursor: pointer;
            margin: 0;
            display: inline-flex;
            outline: 0;
            padding: 0;
            position: relative;
            align-items: center;
            user-select: none;
            border-radius: 0;
            vertical-align: middle;
            -moz-appearance: none;
            justify-content: center;
            text-decoration: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent
        }

        .MuiButtonBase-root::-moz-focus-inner {
            border-style: none
        }

        .MuiButtonBase-root.Mui-disabled {
            cursor: default;
            pointer-events: none
        }

        @media print {
            .MuiButtonBase-root {
                -webkit-print-color-adjust: exact
            }
        }
    </style>
    <style data-jss="" data-meta="MuiSvgIcon">
        .MuiSvgIcon-root {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.5rem;
            transition: fill .2s cubic-bezier(.4, 0, .2, 1) 0s;
            flex-shrink: 0;
            user-select: none
        }

        .MuiSvgIcon-colorPrimary {
            color: #3f51b5
        }

        .MuiSvgIcon-colorSecondary {
            color: #f50057
        }

        .MuiSvgIcon-colorAction {
            color: rgba(0, 0, 0, .54)
        }

        .MuiSvgIcon-colorError {
            color: #f44336
        }

        .MuiSvgIcon-colorDisabled {
            color: rgba(0, 0, 0, .26)
        }

        .MuiSvgIcon-fontSizeInherit {
            font-size: inherit
        }

        .MuiSvgIcon-fontSizeSmall {
            font-size: 1.25rem
        }

        .MuiSvgIcon-fontSizeLarge {
            font-size: 2.1875rem
        }
    </style>
    <style data-jss="" data-meta="MuiInputBase">
        .MuiInputBase-root {
            color: rgba(0, 0, 0, .87);
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 1rem;
            box-sizing: border-box;
            align-items: center;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 400;
            line-height: 1.1876em;
            letter-spacing: .00938em
        }

        .MuiInputBase-root.Mui-disabled {
            color: rgba(0, 0, 0, .38);
            cursor: default
        }

        .MuiInputBase-multiline {
            padding: 6px 0 7px
        }

        .MuiInputBase-multiline.MuiInputBase-marginDense {
            padding-top: 3px
        }

        .MuiInputBase-fullWidth {
            width: 100%
        }

        .MuiInputBase-input {
            font: inherit;
            color: currentColor;
            width: 100%;
            border: 0;
            height: 1.1876em;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: 0 0;
            box-sizing: content-box;
            animation-name: mui-auto-fill-cancel;
            letter-spacing: inherit;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent
        }

        .MuiInputBase-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: .42;
            transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
        }

        .MuiInputBase-input::-moz-placeholder {
            color: currentColor;
            opacity: .42;
            transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
        }

        .MuiInputBase-input:-ms-input-placeholder {
            color: currentColor;
            opacity: .42;
            transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
        }

        .MuiInputBase-input::-ms-input-placeholder {
            color: currentColor;
            opacity: .42;
            transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
        }

        .MuiInputBase-input:focus {
            outline: 0
        }

        .MuiInputBase-input:invalid {
            box-shadow: none
        }

        .MuiInputBase-input::-webkit-search-decoration {
            -webkit-appearance: none
        }

        .MuiInputBase-input.Mui-disabled {
            opacity: 1
        }

        .MuiInputBase-input:-webkit-autofill {
            animation-name: mui-auto-fill;
            animation-duration: 5000s
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
            opacity: 0!important
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
            opacity: 0!important
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
            opacity: 0!important
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
            opacity: 0!important
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
            opacity: .42
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
            opacity: .42
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
            opacity: .42
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
            opacity: .42
        }

        .MuiInputBase-inputMarginDense {
            padding-top: 3px
        }

        .MuiInputBase-inputMultiline {
            height: auto;
            resize: none;
            padding: 0
        }

        .MuiInputBase-inputTypeSearch {
            -moz-appearance: textfield;
            -webkit-appearance: textfield
        }
    </style>
    <style data-jss="" data-meta="MuiFormControl">
        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            flex-direction: column;
            vertical-align: top
        }

        .MuiFormControl-marginNormal {
            margin-top: 16px;
            margin-bottom: 8px
        }

        .MuiFormControl-marginDense {
            margin-top: 8px;
            margin-bottom: 4px
        }

        .MuiFormControl-fullWidth {
            width: 100%
        }
    </style>
    <style data-jss="" data-meta="MuiPopover">
        .MuiPopover-paper {
            outline: 0;
            position: absolute;
            max-width: calc(100% - 32px);
            min-width: 16px;
            max-height: calc(100% - 32px);
            min-height: 16px;
            overflow-x: hidden;
            overflow-y: auto
        }
    </style>
    <style data-jss="" data-meta="MuiMenu">
        .MuiMenu-paper {
            max-height: calc(100% - 96px);
            -webkit-overflow-scrolling: touch
        }

        .MuiMenu-list {
            outline: 0
        }
    </style>
    <style data-jss="" data-meta="MuiSelect">
        .MuiSelect-select {
            cursor: pointer;
            min-width: 16px;
            user-select: none;
            border-radius: 0;
            -moz-appearance: none;
            -webkit-appearance: none
        }

        .MuiSelect-select:focus {
            border-radius: 0;
            background-color: rgba(0, 0, 0, .05)
        }

        .MuiSelect-select::-ms-expand {
            display: none
        }

        .MuiSelect-select.Mui-disabled {
            cursor: default
        }

        .MuiSelect-select[multiple] {
            height: auto
        }

        .MuiSelect-select:not([multiple]) optgroup,
        .MuiSelect-select:not([multiple]) option {
            background-color: #fff
        }

        .MuiSelect-select.MuiSelect-select {
            padding-right: 24px
        }

        .MuiSelect-filled.MuiSelect-filled {
            padding-right: 32px
        }

        .MuiSelect-outlined {
            border-radius: 4px
        }

        .MuiSelect-outlined.MuiSelect-outlined {
            padding-right: 32px
        }

        .MuiSelect-selectMenu {
            height: auto;
            overflow: hidden;
            min-height: 1.1876em;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .MuiSelect-icon {
            top: calc(50% - 12px);
            color: rgba(0, 0, 0, .54);
            right: 0;
            position: absolute;
            pointer-events: none
        }

        .MuiSelect-icon.Mui-disabled {
            color: rgba(0, 0, 0, .26)
        }

        .MuiSelect-iconOpen {
            transform: rotate(180deg)
        }

        .MuiSelect-iconFilled {
            right: 7px
        }

        .MuiSelect-iconOutlined {
            right: 7px
        }

        .MuiSelect-nativeInput {
            left: 0;
            width: 100%;
            bottom: 0;
            opacity: 0;
            position: absolute;
            pointer-events: none
        }
    </style>
    <style data-jss="" data-meta="MuiButton">
        .MuiButton-root {
            color: rgba(0, 0, 0, .87);
            padding: 6px 16px;
            font-size: .875rem;
            min-width: 64px;
            box-sizing: border-box;
            transition: background-color 250ms cubic-bezier(.4, 0, .2, 1) 0s, box-shadow 250ms cubic-bezier(.4, 0, .2, 1) 0s, border 250ms cubic-bezier(.4, 0, .2, 1) 0s;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 500;
            line-height: 1.75;
            border-radius: 4px;
            letter-spacing: .02857em;
            text-transform: uppercase
        }

        .MuiButton-root:hover {
            text-decoration: none;
            background-color: rgba(0, 0, 0, .04)
        }

        .MuiButton-root.Mui-disabled {
            color: rgba(0, 0, 0, .26)
        }

        @media (hover:none) {
            .MuiButton-root:hover {
                background-color: transparent
            }
        }

        .MuiButton-root:hover.Mui-disabled {
            background-color: transparent
        }

        .MuiButton-label {
            width: 100%;
            display: inherit;
            align-items: inherit;
            justify-content: inherit
        }

        .MuiButton-text {
            padding: 6px 8px
        }

        .MuiButton-textPrimary {
            color: #3f51b5
        }

        .MuiButton-textPrimary:hover {
            background-color: rgba(63, 81, 181, .04)
        }

        @media (hover:none) {
            .MuiButton-textPrimary:hover {
                background-color: transparent
            }
        }

        .MuiButton-textSecondary {
            color: #f50057
        }

        .MuiButton-textSecondary:hover {
            background-color: rgba(245, 0, 87, .04)
        }

        @media (hover:none) {
            .MuiButton-textSecondary:hover {
                background-color: transparent
            }
        }

        .MuiButton-outlined {
            border: 1px solid rgba(0, 0, 0, .23);
            padding: 5px 15px
        }

        .MuiButton-outlined.Mui-disabled {
            border: 1px solid rgba(0, 0, 0, .12)
        }

        .MuiButton-outlinedPrimary {
            color: #3f51b5;
            border: 1px solid rgba(63, 81, 181, .5)
        }

        .MuiButton-outlinedPrimary:hover {
            border: 1px solid #3f51b5;
            background-color: rgba(63, 81, 181, .04)
        }

        @media (hover:none) {
            .MuiButton-outlinedPrimary:hover {
                background-color: transparent
            }
        }

        .MuiButton-outlinedSecondary {
            color: #f50057;
            border: 1px solid rgba(245, 0, 87, .5)
        }

        .MuiButton-outlinedSecondary:hover {
            border: 1px solid #f50057;
            background-color: rgba(245, 0, 87, .04)
        }

        .MuiButton-outlinedSecondary.Mui-disabled {
            border: 1px solid rgba(0, 0, 0, .26)
        }

        @media (hover:none) {
            .MuiButton-outlinedSecondary:hover {
                background-color: transparent
            }
        }

        .MuiButton-contained {
            color: rgba(0, 0, 0, .87);
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
            background-color: #e0e0e0
        }

        .MuiButton-contained:hover {
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12);
            background-color: #d5d5d5
        }

        .MuiButton-contained.Mui-focusVisible {
            box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
        }

        .MuiButton-contained:active {
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
        }

        .MuiButton-contained.Mui-disabled {
            color: rgba(0, 0, 0, .26);
            box-shadow: none;
            background-color: rgba(0, 0, 0, .12)
        }

        @media (hover:none) {
            .MuiButton-contained:hover {
                box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
                background-color: #e0e0e0
            }
        }

        .MuiButton-contained:hover.Mui-disabled {
            background-color: rgba(0, 0, 0, .12)
        }

        .MuiButton-containedPrimary {
            color: #fff;
            background-color: #3f51b5
        }

        .MuiButton-containedPrimary:hover {
            background-color: #303f9f
        }

        @media (hover:none) {
            .MuiButton-containedPrimary:hover {
                background-color: #3f51b5
            }
        }

        .MuiButton-containedSecondary {
            color: #fff;
            background-color: #f50057
        }

        .MuiButton-containedSecondary:hover {
            background-color: #c51162
        }

        @media (hover:none) {
            .MuiButton-containedSecondary:hover {
                background-color: #f50057
            }
        }

        .MuiButton-disableElevation {
            box-shadow: none
        }

        .MuiButton-disableElevation:hover {
            box-shadow: none
        }

        .MuiButton-disableElevation.Mui-focusVisible {
            box-shadow: none
        }

        .MuiButton-disableElevation:active {
            box-shadow: none
        }

        .MuiButton-disableElevation.Mui-disabled {
            box-shadow: none
        }

        .MuiButton-colorInherit {
            color: inherit;
            border-color: currentColor
        }

        .MuiButton-textSizeSmall {
            padding: 4px 5px;
            font-size: .8125rem
        }

        .MuiButton-textSizeLarge {
            padding: 8px 11px;
            font-size: .9375rem
        }

        .MuiButton-outlinedSizeSmall {
            padding: 3px 9px;
            font-size: .8125rem
        }

        .MuiButton-outlinedSizeLarge {
            padding: 7px 21px;
            font-size: .9375rem
        }

        .MuiButton-containedSizeSmall {
            padding: 4px 10px;
            font-size: .8125rem
        }

        .MuiButton-containedSizeLarge {
            padding: 8px 22px;
            font-size: .9375rem
        }

        .MuiButton-fullWidth {
            width: 100%
        }

        .MuiButton-startIcon {
            display: inherit;
            margin-left: -4px;
            margin-right: 8px
        }

        .MuiButton-startIcon.MuiButton-iconSizeSmall {
            margin-left: -2px
        }

        .MuiButton-endIcon {
            display: inherit;
            margin-left: 8px;
            margin-right: -4px
        }

        .MuiButton-endIcon.MuiButton-iconSizeSmall {
            margin-right: -2px
        }

        .MuiButton-iconSizeSmall>:first-child {
            font-size: 18px
        }

        .MuiButton-iconSizeMedium>:first-child {
            font-size: 20px
        }

        .MuiButton-iconSizeLarge>:first-child {
            font-size: 22px
        }
    </style>
    <style data-jss="" data-meta="MuiDialog">
        @media print {
            .MuiDialog-root {
                position: absolute!important
            }
        }

        .MuiDialog-scrollPaper {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .MuiDialog-scrollBody {
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center
        }

        .MuiDialog-scrollBody:after {
            width: 0;
            height: 100%;
            content: "";
            display: inline-block;
            vertical-align: middle
        }

        .MuiDialog-container {
            height: 100%;
            outline: 0
        }

        @media print {
            .MuiDialog-container {
                height: auto
            }
        }

        .MuiDialog-paper {
            margin: 32px;
            position: relative;
            overflow-y: auto
        }

        @media print {
            .MuiDialog-paper {
                box-shadow: none;
                overflow-y: visible
            }
        }

        .MuiDialog-paperScrollPaper {
            display: flex;
            max-height: calc(100% - 64px);
            flex-direction: column
        }

        .MuiDialog-paperScrollBody {
            display: inline-block;
            text-align: left;
            vertical-align: middle
        }

        .MuiDialog-paperWidthFalse {
            max-width: calc(100% - 64px)
        }

        .MuiDialog-paperWidthXs {
            max-width: 444px
        }

        @media (max-width:507.95px) {
            .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px)
            }
        }

        .MuiDialog-paperWidthSm {
            max-width: 600px
        }

        @media (max-width:663.95px) {
            .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px)
            }
        }

        .MuiDialog-paperWidthMd {
            max-width: 960px
        }

        @media (max-width:1023.95px) {
            .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px)
            }
        }

        .MuiDialog-paperWidthLg {
            max-width: 1280px
        }

        @media (max-width:1343.95px) {
            .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px)
            }
        }

        .MuiDialog-paperWidthXl {
            max-width: 1920px
        }

        @media (max-width:1983.95px) {
            .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px)
            }
        }

        .MuiDialog-paperFullWidth {
            width: calc(100% - 64px)
        }

        .MuiDialog-paperFullScreen {
            width: 100%;
            height: 100%;
            margin: 0;
            max-width: 100%;
            max-height: none;
            border-radius: 0
        }

        .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
            margin: 0;
            max-width: 100%
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss20 {
            text-transform: none
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss6 {
            line-height: 1.5;
            text-transform: none
        }

        .jss6:hover {
            color: #fff;
            background-color: #007bff
        }

        .jss7 {
            box-shadow: none
        }

        .jss7:active {
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%)
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss8 {
            text-transform: none
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss9 {
            text-transform: none
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss21 {
            width: 300px;
            outline: 0;
            padding: 10px 10px
        }

        .jss22 {
            left: 0;
            color: #000;
            width: 600px;
            border: 1px solid rgba(0, 0, 0, .25);
            margin: 0;
            padding: 0;
            z-index: 1;
            overflow: auto;
            position: absolute;
            list-style: none;
            margin-top: 5px;
            max-height: 300px;
            text-align: left;
            background-color: #fff
        }

        .jss22 li[data-focus=true] {
            color: #fff;
            cursor: pointer;
            background-color: #4a8df6
        }

        .jss22 li:active {
            color: #000;
            background-color: #2977f5
        }

        .jss23 {
            text-transform: none
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        label+.jss24 {
            margin-right: 8px
        }

        .jss25 {
            width: 100px;
            padding: 10px 26px 10px 12px;
            position: relative;
            font-size: 16px;
            text-align: left;
            transition: border-color .3s cubic-bezier(.4, 0, .2, 1) 0s, box-shadow .3s cubic-bezier(.4, 0, .2, 1) 0s;
            font-weight: 600;
            border-radius: 4px;
            background-color: #f2f2f2
        }

        .jss25:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
            border-color: #80bdff;
            border-radius: 4px
        }
    </style>
    <title>Pakistan’s Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com</title>
    <meta content="Pakistan’s Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com" data-react-helmet="true" property="og:title">
    <meta content="Browse the best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at Chhatt.com." data-react-helmet="true" name="description">
    <meta content="summary_large_image" data-react-helmet="true" name="twitter:card">
    <meta content="" data-react-helmet="true" name="twitter:site">
    <meta content="Pakistan’s Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com" data-react-helmet="true" name="twitter:title">
    <meta content="Pakistan’s Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com" data-react-helmet="true" itemprop="name">
    <meta content="Browse the best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at Chhatt.com." data-react-helmet="true" itemprop="description">
    <meta content="Browse the best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at Chhatt.com." data-react-helmet="true" property="og:description">
    <meta content="Browse the best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at Chhatt.com." data-react-helmet="true" name="twitter:description">
    <meta content="Browse the best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at Chhatt.com." data-react-helmet="true" itemprop="description">
    <meta content="" data-react-helmet="true" property="og:image">
    <meta content="" data-react-helmet="true" name="twitter:image">
    <meta content="" data-react-helmet="true" itemprop="image">
    <meta content="https://www.chhatt.com/" data-react-helmet="true" property="og:url">
    <meta content="https://www.chhatt.com/" data-react-helmet="true" itemprop="url">
    <link href="https://www.google-analytics.com" rel="preconnect">
    <link href="https://stats.g.doubleclick.net" rel="preconnect">
    <link href="https://dev.chhatt.com" rel="preconnect">
    <link href="https://chhatt.s3.ap-south-1.amazonaws.com" rel="preconnect">
    <style type="text/css">
        @charset "UTF-8";
        /*!
 * Bootstrap v4.6.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

        .slick-slider {
            box-sizing: border-box;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .slick-list,
        .slick-slider {
            position: relative;
            display: block
        }

        .slick-list {
            overflow: hidden
        }

        .slick-list:focus {
            outline: 0
        }

        .slick-slider .slick-list,
        .slick-slider .slick-track {
            transform: translateZ(0)
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .slick-track:after,
        .slick-track:before {
            display: table;
            content: ""
        }

        .slick-track:after {
            clear: both
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px
        }

        .slick-initialized .slick-slide,
        .slick-slide img,
        footer,
        header,
        section {
            display: block
        }

        @font-face {
            font-family: slick;
            font-weight: 400;
            font-style: normal;
            src: url({{ asset('/static/media/slick.a4e97f5a.eot') }});
            src: url({{ asset('/static/media/slick.a4e97f5a.eot?#iefix') }}) format("embedded-opentype"), url({{ asset('/static/media/slick.29518378.woff') }}) format("woff"), url({{ asset('/static/media/slick.c94f7671.ttf') }}) format("truetype"), url({{ asset('/static/media/slick.2630a3e3.svg#slick') }}) format("svg")
        }

        .slick-next,
        .slick-prev {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            display: block;
            width: 20px;
            height: 20px;
            padding: 0;
            transform: translateY(-50%);
            cursor: pointer;
            border: 0
        }

        .slick-next,
        .slick-next:focus,
        .slick-next:hover,
        .slick-prev,
        .slick-prev:focus,
        .slick-prev:hover {
            color: transparent;
            outline: 0;
            background: 0 0
        }

        .slick-next:focus:before,
        .slick-next:hover:before,
        .slick-prev:focus:before,
        .slick-prev:hover:before {
            opacity: 1
        }

        .slick-prev.slick-disabled:before {
            opacity: .25
        }

        .slick-next:before,
        .slick-prev:before {
            font-family: slick;
            line-height: 1;
            opacity: .75;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .slick-prev {
            left: -25px
        }

        .slick-prev:before {
            content: "←"
        }

        .slick-next {
            right: -25px
        }

        .slick-next:before {
            content: "→"
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0!important
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        h1,
        h2,
        h4 {
            font-weight: 500
        }

        h1,
        h2,
        h3,
        h4,
        p,
        ul {
            margin-top: 0
        }

        h1,
        h2,
        h3,
        h4 {
            line-height: 1.2;
            margin-bottom: .5rem
        }

        p,
        ul {
            margin-bottom: 1rem
        }

        ul {
            list-style: none
        }

        b,
        strong {
            font-weight: bolder
        }

        a {
            color: #007bff;
            background-color: transparent
        }

        a:hover {
            color: #0056b3
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        img,
        svg {
            vertical-align: middle
        }

        img {
            border-style: none
        }

        svg {
            overflow: hidden
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            overflow: visible
        }

        button {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        [type=button],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        [type=button]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        h1 {
            font-size: 2.5rem
        }

        h2 {
            font-size: 2rem
        }

        h3 {
            font-size: 1.75rem
        }

        h4 {
            font-size: 1.5rem
        }

        .m-0 {
            margin: 0!important
        }

        @font-face {
            font-family: Lato-Regular;
            src: url({{ asset('/static/media/Lato-Regular.9919edff.ttf') }})
        }

        body,
        html {
            transition: all .5s
        }

        html {
            font-family: Lato, Helvetica Arial, sans-serif!important
        }

        *,
        body {
            font-family: Lato-Regular!important
        }

        * {
            border: 0;
            box-sizing: border-box;
            padding: 0
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h3 {
            font-weight: 600!important
        }

        .slick-prev:before {
            left: -10px
        }

        .slick-next:before,
        .slick-prev:before {
            font-size: 30px!important;
            color: #b4b4b4!important;
            position: relative;
            top: -7px
        }

        .slick-next:before {
            right: -1px
        }

        .slick-list {
            margin: 55px 0 35px!important;
            padding: 20px 0!important
        }

        .Style_scroll__3jiFe a,
        a,
        a:hover {
            text-decoration: none!important
        }

        .active_bestProperties button {
            background-color: #007bff;
            color: #fff
        }

        .navbarContainer {
            transition: all .6s
        }

        .navbarContainer .innerContainer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1900px;
            height: 65px;
            margin: auto
        }

        .Style_main_div__1CiZ3 {
            z-index: 9;
            top: 0;
            position: absolute;
            width: 100%;
            min-width: 991px;
            transition: all .3s linear
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN {
            min-width: 991px;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            padding: 1rem;
            transition: .7s;
            z-index: 1
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_logo__1BoxC img {
            cursor: pointer;
            width: 110px
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN {
            margin-top: 18px
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul .Style_lif__q7XJ- {
            background-color: #007bff;
            margin-right: 15px
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul .Style_lis__1PIYi {
            margin-right: 15px
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul li {
            list-style-type: none;
            display: inline-block;
            border-radius: 3px;
            font-weight: 700;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all .3s ease-in-out;
            padding: 1px 10px
        }

        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul li:hover {
            background-color: #007bff;
            box-shadow: inset 0 0 0 4px #007bff
        }

        .Style_mn_div__3eG-K {
            position: relative;
            width: 100%;
            height: 100vh;
            min-width: 991px;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff
        }

        .Style_imgs__1tyNk {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .Style_backg__1eMcH {
            position: relative;
            width: 100%;
            height: 100vh;
            z-index: 1;
            padding-top: 50px
        }

        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M {
            height: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_main_bar__1fA5I {
            width: 100%;
            max-width: 750px
        }

        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M h1 {
            color: #fff;
            font-size: 41px;
            padding: 0;
            font-weight: 900;
            letter-spacing: 1.3px;
            word-spacing: 1px;
            width: 550px
        }

        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ {
            margin-top: 30px;
            background-color: #fff;
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 55px
        }

        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ .Style_searchIcon__3Maw7 {
            width: 5%;
            color: rgba(0, 0, 0, .2);
            margin-left: 5px
        }

        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ button {
            border-radius: 3px;
            margin-left: 10px;
            margin-right: 8px;
            background-color: #007bff;
            color: #fff;
            border: 0;
            outline: 0;
            cursor: pointer;
            padding: 0 20px;
            height: 36px
        }

        .Style_scroll__3jiFe {
            position: absolute;
            right: 30px;
            bottom: 30px;
            text-align: center;
            cursor: pointer
        }

        .Style_scroll__3jiFe a {
            color: #fff!important
        }

        .Style_scroll__3jiFe .Style_txtScroll__2AA0Y {
            font-size: 16px;
            -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
            text-transform: uppercase;
            margin-bottom: 15px;
            position: relative;
            left: 2px
        }

        @media screen and (max-width:1400px) {
            .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_logo__1BoxC img {
                width: 120px;
                height: auto
            }
            .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul li {
                font-size: 15px
            }
            .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ {
                margin-top: 15px;
                height: 52px
            }
            .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_main_bar__1fA5I {
                max-width: 680px
            }
        }

        @media screen and (max-width:1200px) {
            .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ {
                margin-top: 15px;
                height: 52px
            }
            .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_main_bar__1fA5I {
                max-width: 600px
            }
            .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M h1 {
                font-size: 38px
            }
        }

        .Style_main_section__3Esea {
            text-align: center;
            padding: 0 20px;
            min-width: 991px;
            margin-bottom: -15px
        }

        .Style_main_section__3Esea h2 {
            padding-top: 20px;
            font-size: 35px;
            font-weight: 700;
            margin-bottom: 70px
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB {
            display: flex;
            justify-content: center;
            max-width: 1200px;
            min-width: 891px;
            margin: auto
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB div:nth-child(4) {
            margin-right: 0
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM {
            border-radius: 5px;
            background-color: #e9ebec;
            padding: 0 30px;
            width: 300px;
            height: 200px;
            margin-right: 20px;
            cursor: pointer
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM img {
            width: 100%;
            height: 100%;
            position: relative;
            top: -30px;
            border-radius: 5px
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM h4 {
            font-size: 20px;
            font-weight: 700;
            color: #000
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM .Style_imgs__hHNpV {
            transition: all .2s linear
        }

        .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM .Style_imgs__hHNpV:hover {
            transform: scale(1.1)
        }

        @media screen and (max-width:1400px) {
            .Style_main_section__3Esea {
                padding-top: 25px;
                font-size: 33px
            }
            .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM {
                height: 170px
            }
        }

        .Style_maindiv__zvbaR {
            width: 100%;
            text-align: center;
            padding: 50px 20px 0;
            position: relative;
            min-width: 991px
        }

        .Style_maindiv__zvbaR hr {
            background-color: #f6f7fb;
            max-width: 1300px;
            margin: auto
        }

        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V {
            width: 100%;
            max-width: 1300px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: -70px!important
        }

        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_secdivtxt__25WL6 {
            font-size: 30px;
            font-weight: 700
        }

        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul {
            display: flex
        }

        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul .Style_viewall__kbCD2 button {
            color: #007bff;
            background-color: transparent;
            border: 1px solid #e9ebec;
            margin-left: 50px;
            padding: 5px 15px
        }

        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul>li>button {
            padding: 5px 15px;
            border-radius: 3px;
            font-size: 16px;
            margin-left: 10px
        }

        .Style_mainSlide_Div__rIXZE {
            text-align: -webkit-center;
            width: 100%;
            max-width: 1380px;
            margin: auto;
            padding: 0 30px
        }

        @media screen and (max-width:1400px) {
            .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_secdivtxt__25WL6 {
                font-size: 29px
            }
            .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul>li>button {
                font-size: 15px
            }
            .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57 {
                margin-top: 10px
            }
        }

        @media (max-width:1230px) {
            .Style_mainSlide_Div__rIXZE {
                max-width: 1115px
            }
        }

        .Style_maindiv__1aBho {
            width: 93%;
            border-radius: 10px;
            box-shadow: 0 0 10px 5px #eee;
            padding: 5px 5px 1px
        }

        .Style_maindiv__1aBho .Style_img_div__2wG9Z {
            height: 240px;
            width: 100%;
            position: relative
        }

        .Style_maindiv__1aBho .Style_img_div__2wG9Z img {
            border-radius: 10px;
            cursor: pointer
        }

        .Style_maindiv__1aBho .Style_img_div__2wG9Z .Style_sale__19ykp {
            position: absolute;
            top: 5px;
            left: 5px;
            background-color: #c90000;
            color: #fff;
            border-radius: 5px;
            font-size: 14px;
            padding: 3px 10px
        }

        .Style_maindiv__1aBho .Style_img_div__2wG9Z .Style_ptxt1__3M7at {
            margin: 10px auto auto;
            display: flex;
            justify-content: space-between;
            width: 93.5%;
            font-size: 14px
        }

        .Style_maindiv__1aBho .Style_img_div__2wG9Z .Style_ptxt1__3M7at>p {
            color: rgba(0, 0, 0, .3)
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 {
            height: 47%;
            width: 95%;
            margin: auto
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_ptxt2__1CSQr {
            margin-top: 20px;
            width: 100%;
            height: 30%;
            text-align: left;
            padding-left: 2px
        }

        .Style_mainSlide_Div__2xUzD a,
        .Style_mainSlide_Div__2xUzD a:hover,
        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 a,
        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_ptxt2__1CSQr a {
            color: #000
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_ptxt2__1CSQr p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET {
            display: flex
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_pro_bed__2P17S {
            margin-left: 1px;
            margin-right: 5px;
            width: 17px;
            fill: #79879c
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_bed_count__1fkhV {
            border-right: 1px solid #000;
            display: inline-block;
            padding-right: 18px;
            font-size: 13px
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn2__1bWa2 {
            padding-left: 6px
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_pro_bath__211eG {
            padding: 0 10px;
            width: 38px;
            fill: #79879c
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_bath_count__3PVqa {
            border-right: 1px solid #000;
            display: inline-block;
            padding-right: 18px;
            font-size: 13px
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn3__3DKIv {
            display: flex;
            margin: auto
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_pro_area__OBTIC {
            width: 20px;
            margin-left: 5px
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_area_count__1_QqF {
            font-size: 13px;
            position: relative;
            left: 8px;
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 105px;
            text-align: left
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy {
            margin: 10px 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy button {
            background: 0 0
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy .Style_VMBtn__ERtZP {
            background-color: #007bff;
            border-radius: 3px;
            width: 48%;
            font-size: 14px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy button:nth-child(2) {
            height: 35px;
            width: 48%;
            border: 2px solid #007bff;
            background: #fff;
            border-radius: 3px;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000
        }

        .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy button:nth-child(2):focus {
            outline: 0
        }

        @media screen and (max-width:1400px) {
            .Style_maindiv__1aBho .Style_img_div__2wG9Z {
                height: 220px
            }
        }

        @media (max-width:1300px) {
            .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_pro_bed__2P17S {
                margin-left: 1px;
                margin-right: 5px;
                width: 17px;
                fill: #79879c
            }
            .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_bed_count__1fkhV {
                border-right: 1px solid #000;
                display: inline-block;
                padding-right: 10px!important;
                font-size: 13px
            }
            .Style_icn_container__1JFET .Style_icn2__1bWa2 {
                padding-left: 0!important
            }
            .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_pro_bath__211eG {
                padding: 0 10px;
                width: 38px;
                fill: #79879c
            }
            .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_bath_count__3PVqa {
                border-right: 1px solid #000;
                display: inline-block;
                padding-right: 12px!important;
                font-size: 13px
            }
            .Style_icn_container__1JFET .Style_icn3__3DKIv {
                display: flex;
                margin: auto
            }
            .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_pro_area__OBTIC {
                width: 20px;
                margin-left: 0!important
            }
            .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_area_count__1_QqF {
                font-size: 13px;
                position: relative;
                left: 5px!important;
                display: inline-block
            }
        }

        .Style_main_div__2Efn3 {
            background-color: #fbfbfb;
            padding: 60px 50px;
            width: 100%;
            max-width: 1620px;
            min-width: 991px;
            margin: auto
        }

        .Style_main_div__2Efn3 .Style_sdiv__28NCf {
            width: 100%;
            max-width: 1310px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .Style_main_div__2Efn3 .Style_sdiv__28NCf .Style_f_div__1HEyq {
            width: 300px!important
        }

        .Style_mainSlide_Div__2xUzD {
            margin-left: 50px;
            text-align: -webkit-center;
            width: 850px
        }

        .Style_apart__16bO7,
        .Style_house__3emmS,
        .Style_office__5SF1Z,
        .Style_svilla__AFRMr,
        .Style_villa__197V_ {
            cursor: pointer;
            width: 170px!important;
            padding-top: 25px;
            padding-bottom: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px 5px #eee
        }

        @media (max-width:1270px) {
            .Style_mainSlide_Div__2xUzD {
                max-width: 650px!important
            }
        }

        @media (max-width:1400px) {
            .Style_main_div__2Efn3 {
                padding: 10px 50px
            }
        }

        .Style_main_div__2SsuI {
            width: 100%;
            max-width: 1650px;
            min-width: 991px;
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            padding: 80px 20px;
            margin: auto
        }

        .Style_main_div__2SsuI .Style_fdiv__3yvZ9,
        .Style_main_div__2SsuI .Style_sdiv__1Vcb9 {
            width: 50%;
            height: 200px;
            display: flex;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            align-items: center;
            justify-content: space-around
        }

        .Style_main_div__2SsuI .Style_fdiv__3yvZ9 {
            margin-right: 20px;
            background-image: url(/static/media/propertyCard.32b672a1.webp)
        }

        .Style_main_div__2SsuI .Style_fdiv__3yvZ9 .Style_fdiv_fch__2L__V>p,
        .Style_main_div__2SsuI .Style_sdiv__1Vcb9 .Style_sdiv_fch__kDI7A>p {
            font-size: 30px;
            font-weight: bolder;
            color: #fff;
            line-height: 20px
        }

        .Style_main_div__2SsuI .Style_fdiv__3yvZ9 .Style_fdiv_sch__1Ehp0>a button,
        .Style_main_div__2SsuI .Style_sdiv__1Vcb9 .Style_sdiv_sch__1AMoj>a button {
            height: auto;
            color: #fff;
            background-color: #007bff;
            border-radius: 3px;
            padding: 8px 30px;
            font-size: 18px;
            font-weight: 700
        }

        .Style_main_div__2SsuI .Style_sdiv__1Vcb9 {
            background-image: url({{ asset('/static/media/constructionCard.e0303ecf.webp') }})
        }

        @media (max-width:1300px) {
            .Style_main_div__2SsuI {
                flex-direction: column;
                justify-content: center;
                align-items: center
            }
            .Style_main_div__2SsuI .Style_fdiv__3yvZ9 {
                margin-right: 0;
                width: 80%;
                margin-bottom: 20px
            }
            .Style_main_div__2SsuI .Style_sdiv__1Vcb9 {
                width: 80%
            }
        }

        .Style_main_div__2Im_F {
            width: 100%;
            text-align: center;
            position: relative;
            margin-bottom: 60px;
            min-width: 1007px;
            background-color: #101820
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a {
            width: 100%;
            padding: 50px 15px;
            max-width: 1318px;
            margin: auto;
            display: flex;
            justify-content: space-around;
            align-items: center
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_inpErrors__rLBew {
            margin-bottom: -5px;
            color: red;
            font-size: 14px;
            font-weight: 600;
            position: absolute;
            margin-left: 5px;
            letter-spacing: 2.5px
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH {
            width: auto;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input {
            text-decoration: none;
            border: 1px solid #fff;
            border-radius: 3px;
            color: #fff;
            background-color: #101820;
            outline: 0;
            padding: 8px 0 8px 15px
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input::-webkit-input-placeholder {
            color: #fff
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input:-ms-input-placeholder {
            color: #fff
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input::placeholder {
            color: #fff
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH button {
            text-align: center;
            margin-left: 10px;
            color: #fff;
            background-color: #007bff;
            border-radius: 3px;
            padding: 8px 30px;
            font-size: 16px;
            font-weight: 700
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_f_div__3wB5J {
            margin-right: 50px;
            display: flex;
            flex-direction: column
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_f_div__3wB5J h4 {
            text-align: left;
            font-weight: 900;
            color: #fff
        }

        .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_f_div__3wB5J p {
            color: #fff;
            text-align: left
        }

        .Style_main_div__2Oe0L {
            max-width: 1620px;
            min-width: 991px;
            padding: 0 20px;
            margin: auto
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU {
            display: flex;
            justify-content: space-between;
            max-width: 1120px;
            min-width: 950px;
            margin: auto auto 50px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call__kzEDm {
            padding-left: 20px;
            border-left: 2px solid #e7e7e7;
            display: flex
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call1__2XSHO .Style_callimg__GUqWQ,
        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call2__2BVHN .Style_callimg__GUqWQ,
        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call__kzEDm .Style_callimg__GUqWQ {
            margin-right: 25px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call1__2XSHO .Style_callimg__GUqWQ img,
        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call2__2BVHN .Style_callimg__GUqWQ img,
        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call__kzEDm .Style_callimg__GUqWQ img {
            width: 15px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call1__2XSHO,
        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call2__2BVHN {
            margin-top: 30px;
            padding-left: 20px;
            border-left: 2px solid #e7e7e7;
            display: flex
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_sdiv__14QZ2 ul li {
            padding-bottom: 10px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl {
            position: relative;
            top: -10px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl img {
            width: 100px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl p {
            margin-top: 20px;
            width: 420px
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc {
            display: flex;
            flex-direction: column
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc h1 {
            font-size: 1.4rem;
            font-weight: 700
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playHeading__1L9Yc {
            align-items: center
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 {
            margin-top: .5rem;
            display: flex;
            align-items: center
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj- {
            margin-right: 1rem;
            padding: .4rem .5rem .5rem;
            cursor: pointer;
            border-radius: 100%;
            width: 40px;
            height: 40px;
            background-color: rgba(0, 0, 0, .1);
            transition: all .6s
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_instagram__3u4dG:hover {
            color: #ef4f02;
            background-color: rgba(239, 79, 2, .1)
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_facebook__1iWwQ:hover {
            color: #1877f2;
            background-color: rgba(24, 119, 242, .1)
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_youtube__TDLxj:hover {
            color: #cf2321;
            background-color: rgba(207, 35, 33, .1)
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_linkedin__2lGUP:hover {
            color: #0073b1;
            background-color: rgba(0, 115, 177, .1)
        }

        .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_google__18FSk:hover {
            color: #03e282;
            background-color: rgba(3, 226, 130, .1)
        }

        .Style_txt_div__32hGa p:first-of-type {
            color: #007cff
        }

        .Style_footerbottom__2Yugr {
            border-top: 1px solid #e7e7e7;
            max-width: 1620px;
            min-width: 891px;
            margin: auto;
            font-size: 14px;
            padding: 20px 0
        }

        .Style_footerbottom__2Yugr .Style_footersub_div__1ZRrl {
            display: flex;
            justify-content: space-between;
            max-width: 1350px;
            min-width: 800px;
            margin-left: auto
        }

        .Style_footerbottom__2Yugr button {
            background-color: #007cff;
            padding: 6px 7px;
            border-radius: 100%
        }
    </style>
        <noscript>
            <link href="{{ asset('/static/css/2.783abc39.chunk.css') }}" rel="stylesheet">
            <link href="{{ asset('/static/css/main.3cafa4fc.chunk.css') }}" rel="stylesheet">
    </noscript>
    <link href="{{ asset('/static/css/2.783abc39.chunk.css') }}" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="{{ asset('/static/css/main.3cafa4fc.chunk.css') }}" rel="preload" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    <div id="root">
        <div>
            <div>
                <header id="sctop">
                    <div class="Style_main_div__1CiZ3" id="head1">
                        <div class="Style_s_div__ir9VN navbarContainer">
                            <div class="innerContainer">
                                <div class="Style_logo__1BoxC" id="lgo">
                                    <a href="/"><img alt="home" src="http://localhost:45678/static/media/logow.0bbcf4ce.png"></a>
                                </div>
                                <div class="Style_tabss__355JN">
                                    <ul>
                                        <a href="/" title="Home" style="color:#fff">
                                            <li class="Style_lif__q7XJ-"><span>HOME</span></li>
                                        </a>
                                        <a href="/property" title="Property" style="color:#fff">
                                            <li class="Style_lis__1PIYi"><span>Property</span></li>
                                        </a>
                                        <a href="/construction" title="Construction" style="color:#fff">
                                            <li class="Style_lis__1PIYi"><span>Construction</span></li>
                                        </a>
                                        <a href="/real-estate-agencies" title="real-estate-agencies" style="color:#fff">
                                            <li class="Style_lis__1PIYi"><span>Agencies</span></li>
                                        </a>
                                        <a href="/contact-us" title="contact-us" style="color:#fff">
                                            <li class="Style_lis__1PIYi"><span>Contact Us</span></li>
                                        </a>
                                        <a href="/wanted" title="wanted" style="color:#fff">
                                            <li class=""><span>Wanted</span></li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Style_mn_div__3eG-K"><img alt="house for sell and construction material" src="data:image/webp;base64,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"
                            class="Style_imgs__1tyNk" style="filter:blur(0)">
                        <div class="Style_backg__1eMcH">
                            <div class="Style_backg_sdiv__Gjg5M">
                                <h1>Find the Best Properties and Construction Material</h1>
                                <div class="Style_main_bar__1fA5I">
                                    <div class="Style_searchdiv__QMXZ_"><span class="Style_searchIcon__3Maw7"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" stroke="currentColor" stroke-width="0" width="1em" font-size="26px"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z"></path></g></svg></span>
                                        <div
                                            style="width:450px">
                                            <div id="listBox">
                                                <div aria-expanded="false" role="combobox"><input class="jss21" value="" aria-autocomplete="list" autocapitalize="none" autocomplete="off" id="use-autocomplete-demo" placeholder="Search..." spellcheck="false"></div>
                                            </div>
                                    </div>
                                    <div style="margin-right:12px">
                                        <div class="MuiFormControl-root">
                                            <div class="MuiInputBase-root jss24 MuiInputBase-formControl">
                                                <div class="MuiSelect-root MuiSelect-select MuiSelect-selectMenu MuiInputBase-input jss25" tabindex="0" aria-haspopup="listbox" aria-labelledby="demo-customized-select-label demo-customized-select" id="demo-customized-select"
                                                    role="button">Karachi</div><input class="MuiSelect-nativeInput" value="karachi" aria-hidden="true" tabindex="-1"><svg viewBox="0 0 24 24" class="MuiSvgIcon-root MuiSelect-icon" aria-hidden="true" focusable="false"><path d="M7 10l5 5 5-5z"></path></svg></div>
                                        </div>
                                    </div><button class="MuiButtonBase-root MuiButton-root jss23 MuiButton-contained MuiButton-containedPrimary" type="button" tabindex="0"><span class="MuiButton-label">Search</span><span class="MuiTouchRipple-root"></span></button></div>
                            </div>
                        </div>
                        <div class="Style_scroll__3jiFe">
                            <a>
                                <div class="Style_txtScroll__2AA0Y">Scroll</div>
                                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" height="30" stroke="currentColor" stroke-width="0" width="30"><path d="M13.0125 19.162L14.8246 17.3398L16.2427 18.7501L12.012 23.0046L7.75726 18.7739L9.16751 17.3557L11.0126 19.1905L10.998 0.997021L12.998 0.995422L13.0125 19.162Z" fill="currentColor"></path></svg></div>
                            </a>
                        </div>
                    </div>
            </div>
            </header>
            <section class="Style_main_section__3Esea" id="find">
                <h2>Find the Business in town</h2>
                <div class="Style_cardss__1yeNB">
                    <a href="/real-estate-agencies" class="Style_crd__3IfAM" title="Realtor"><img alt="Best Realtor" src="http://localhost:45678/static/media/propertyhigh.061ee941.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
                        <h4>Realtor</h4>
                    </a>
                    <a href="/property" class="Style_crd__3IfAM" title="Property"><img alt="property for sell" src="http://localhost:45678/static/media/realtorhigh.50c95b4c.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
                        <h4>Property</h4>
                    </a>
                    <div class="Style_crd__3IfAM" title="Construction"><img alt="Construction Services" src="http://localhost:45678/static/media/constructionhigh.6128b1b6.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
                        <h4>Construction</h4>
                    </div>
                    <div class="Style_crd__3IfAM" title="Contractor"><img alt="Best Contractor" src="http://localhost:45678/static/media/contractorhigh.e0b9f7c0.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
                        <h4>Contractor</h4>
                    </div>
                </div><br><br></section>
            <div class="Style_maindiv__zvbaR" id="bestProperty">
                <hr><br><br>
                <div class="Style_secdiv__3gJ9V">
                    <div class="Style_secdivtxt__25WL6">
                        <h3>Best properties for you</h3>
                    </div>
                    <div class="Style_sul__o5v57">
                        <ul>
                            <li class="undefined active_bestProperties" title="All" id="allBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">All</span><span class="MuiTouchRipple-root"></span></button></li>
                            <li title="Residential"
                                id="resBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">Residential</span><span class="MuiTouchRipple-root"></span></button></li>
                            <li title="Commercial"
                                id="comBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">Commercial</span><span class="MuiTouchRipple-root"></span></button></li>
                            <li title="Industrial"
                                id="indBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">Industrial</span><span class="MuiTouchRipple-root"></span></button></li>
                            <li class="Style_viewall__kbCD2"
                                title="View all"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-outlined" type="button" tabindex="0"><span class="MuiButton-label">View all</span><span class="MuiTouchRipple-root"></span></button></li>
                        </ul>
                    </div>
                </div><br>
                <div class="Style_mainSlide_Div__rIXZE">
                    <div class="slick-slider slick-initialized" dir="ltr"><button class="slick-arrow slick-prev" type="button" data-role="none" style="display:block">Previous</button>
                        <div class="slick-list">
                            <div class="slick-track" style="width:6831px;opacity:1;transform:translate3d(-891px,0,0)">
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="-3" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621597466-8.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>4 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190">
                                                            <p style="font-size:16px"><strong>House For Sale in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">4</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="-2" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621512631-2.png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>5 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189">
                                                            <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">3</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">3</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">2300 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="-1" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187"><img alt="" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621418891png" height="90%" width="100%" title=""></a>
                                                    <div class="Style_sale__19ykp">For Buy</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>6 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187">
                                                            <p style="font-size:16px"><strong>House For Buy in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">2</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">200 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active slick-current" style="outline:0;width:297px" aria-hidden="false" data-index="0" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664949png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198">
                                                            <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF"></span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" style="outline:0;width:297px" aria-hidden="false" data-index="1" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664373png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197">
                                                            <p style="font-size:16px"><strong>Building For Rent in Clifton</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1250 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" style="outline:0;width:297px" aria-hidden="false" data-index="2" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621663122png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196">
                                                            <p style="font-size:16px"><strong>Mezzanine For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="3" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621662011png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195">
                                                            <p style="font-size:16px"><strong>House For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.48 Lac</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">2</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">212541 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="4" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621661651-MMM.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194">
                                                            <p style="font-size:16px"><strong>Plot For Sale in DHA City</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">6500 Yards</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="5" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621660430-6.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193">
                                                            <p style="font-size:16px"><strong>Building For Sale in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">700 Yards</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="6" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621598285-6.png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>4 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192">
                                                            <p style="font-size:16px"><strong>Building For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">5</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">5</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="7" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621597466-8.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>4 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190">
                                                            <p style="font-size:16px"><strong>House For Sale in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">4</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="8" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621512631-2.png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>5 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189">
                                                            <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">3</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">3</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">2300 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="9" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187"><img alt="" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621418891png" height="90%" width="100%" title=""></a>
                                                    <div class="Style_sale__19ykp">For Buy</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>6 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187">
                                                            <p style="font-size:16px"><strong>House For Buy in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">2</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">200 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="10" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664949png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198">
                                                            <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF"></span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="11" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664373png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197">
                                                            <p style="font-size:16px"><strong>Building For Rent in Clifton</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1250 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="12" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621663122png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196">
                                                            <p style="font-size:16px"><strong>Mezzanine For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="13" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621662011png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195">
                                                            <p style="font-size:16px"><strong>House For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.48 Lac</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">2</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">212541 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="14" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621661651-MMM.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194">
                                                            <p style="font-size:16px"><strong>Plot For Sale in DHA City</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">6500 Yards</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="15" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621660430-6.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>3 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193">
                                                            <p style="font-size:16px"><strong>Building For Sale in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">700 Yards</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="16" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621598285-6.png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Commercial</p>
                                                        <p>4 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192">
                                                            <p style="font-size:16px"><strong>Building For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">5</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">5</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="17" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621597466-8.png" height="90%" width="100%" title="properties for sale"></a>
                                                    <div class="Style_sale__19ykp">For Sale</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>4 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190">
                                                            <p style="font-size:16px"><strong>House For Sale in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">4</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                            role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                            tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="18" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621512631-2.png" height="90%" width="100%" title="properties for rent"></a>
                                                    <div class="Style_sale__19ykp">For Rent</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>5 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189">
                                                            <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">3</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">3</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">2300 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="19" tabindex="-1">
                                    <div>
                                        <div style="width:100%;display:inline-block" tabindex="-1">
                                            <div></div>
                                            <div class="Style_maindiv__1aBho">
                                                <div class="Style_img_div__2wG9Z">
                                                    <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187"><img alt="" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621418891png" height="90%" width="100%" title=""></a>
                                                    <div class="Style_sale__19ykp">For Buy</div>
                                                    <div class="Style_ptxt1__3M7at">
                                                        <p>Residential</p>
                                                        <p>6 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="Style_mainchild__OhnI1">
                                                    <div class="Style_ptxt2__1CSQr">
                                                        <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187">
                                                            <p style="font-size:16px"><strong>House For Buy in DHA</strong></p>
                                                        </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.0 k</p></b></div>
                                                    <div class="Style_icn_container__1JFET">
                                                        <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                             <span class="Style_bed_count__1fkhV">2</span></div>
                                                        <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                            <span
                                                                class="Style_bath_count__3PVqa">2</span>
                                                        </div>
                                                        <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                                class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">200 Sq.ft</span></div>
                                                    </div>
                                                    <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                            tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="slick-arrow slick-next" type="button" data-role="none" style="display:block">Next</button></div>
                    <hr style="margin:0 0 60px">
                </div>
            </div>
            <div class="Style_main_div__2Efn3">
                <div class="Style_sdiv__28NCf">
                    <div class="Style_f_div__1HEyq">
                        <h3><b>Explore</b></h3>
                        <h3><b>by Property Type</b></h3>
                    </div>
                    <div class="Style_mainSlide_Div__2xUzD">
                        <div class="slick-slider slick-initialized" dir="ltr">
                            <div class="slick-arrow slick-prev slick-disabled" style="display:block"></div>
                            <div class="slick-list">
                                <div class="slick-track" style="width:1302px;opacity:1;transform:translate3d(0,0,0)">
                                    <div class="slick-slide slick-active slick-current" style="outline:0;width:217px" aria-hidden="false" data-index="0" tabindex="-1">
                                        <div>
                                            <a href="/property/flat" tabindex="-1" style="width:100%;display:inline-block" title="Flat">
                                                <div class="Style_apart__16bO7"><img alt="flat for sale" src="/static/media/apartment.080cda44.svg" height="60px" width="50px"><br>
                                                    <p>Flat</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-active" style="outline:0;width:217px" aria-hidden="false" data-index="1" tabindex="-1">
                                        <div>
                                            <a href="/property/villa" tabindex="-1" style="width:100%;display:inline-block" title="Villa">
                                                <div class="Style_house__3emmS"><img alt="home for sale" src="/static/media/home.baca284c.svg" height="55px" width="60px"><br>
                                                    <p>Villa</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-active" style="outline:0;width:217px" aria-hidden="false" data-index="2" tabindex="-1">
                                        <div>
                                            <a href="/property/plot" tabindex="-1" style="width:100%;display:inline-block" title="Plot">
                                                <div class="Style_office__5SF1Z"><img alt="plot for sale" src="/static/media/office-desk.6715aeb0.svg" height="55px" width="60px"><br>
                                                    <p>Plot</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slick-slide" style="outline:0;width:217px" aria-hidden="true" data-index="3" tabindex="-1">
                                        <div>
                                            <a href="/property/farm-house" tabindex="-1" style="width:100%;display:inline-block" title="Farm House">
                                                <div class="Style_villa__197V_"><img alt="villa for sale" src="/static/media/villa.ea74d56f.svg" height="55px" width="60px"><br>
                                                    <p>Farm House</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slick-slide" style="outline:0;width:217px" aria-hidden="true" data-index="4" tabindex="-1">
                                        <div>
                                            <a href="/property/upper-portion" tabindex="-1" style="width:100%;display:inline-block" title="Upper Portion">
                                                <div class="Style_svilla__AFRMr"><img alt="upper portion for sale" src="/static/media/villa.ea74d56f.svg" height="55px" width="60px"><br>
                                                    <p>Upper Portion</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slick-slide" style="outline:0;width:217px" aria-hidden="true" data-index="5" tabindex="-1">
                                        <div>
                                            <a href="/property/lower-portion" tabindex="-1" style="width:100%;display:inline-block" title="Lower Portion">
                                                <div class="Style_svilla__AFRMr"><img alt="lower portion for sale" src="/static/media/villa.ea74d56f.svg" height="55px" width="60px"><br>
                                                    <p>Lower Portion</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-arrow slick-next" style="display:block"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Style_main_div__2SsuI">
                <div class="Style_fdiv__3yvZ9" title="Properties Site">
                    <div class="Style_fdiv_fch__2L__V">
                        <p>Hundred of properties</p>
                        <p>from top locations</p>
                    </div>
                    <div class="Style_fdiv_sch__1Ehp0"><a href="/property"><button class="MuiButtonBase-root MuiButton-root jss8 MuiButton-contained" type="button" tabindex="0"><span class="MuiButton-label">Properties Site</span><span class="MuiTouchRipple-root"></span></button></a></div>
                </div>
                <div class="Style_sdiv__1Vcb9" title="Construction Site">
                    <div class="Style_sdiv_fch__kDI7A">
                        <p>Find the best</p>
                        <p>construction materials</p>
                    </div>
                    <div class="Style_sdiv_sch__1AMoj"><a href="/construction"><button class="MuiButtonBase-root MuiButton-root jss8 MuiButton-contained" type="button" tabindex="0"><span class="MuiButton-label">Construction Site</span><span class="MuiTouchRipple-root"></span></button></a></div>
                </div>
            </div>
            <div class="Style_main_div__2Im_F">
                <div class="Style_sdiv__1h_4a">
                    <div class="Style_f_div__3wB5J">
                        <h4>Newsletter</h4>
                        <p>Subscribe for newsletter and receive latest updates and trends about chhatt.com</p>
                    </div>
                    <div class="Style_input_div__-o7jH">
                        <form class="Style_sdiv__1h_4a">
                            <div><input placeholder="Enter your Email" name="email" size="50" type="email">
                                <div class="Style_inpErrors__rLBew"></div>
                            </div>
                            <div><button class="MuiButtonBase-root MuiButton-root jss9 MuiButton-contained" type="submit" tabindex="0"><span class="MuiButton-label">Subscribe</span><span class="MuiTouchRipple-root"></span></button></div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="Style_main_div__2Oe0L">
                <div class="Style_sub_div__3_1FU">
                    <div class="Style_fdiv__2nTiL">
                        <div class="Style_call__kzEDm">
                            <div class="Style_callimg__GUqWQ"><img alt="chhatt" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABgAAAAYADwa0LPAAAAB3RJTUUH5QMNDBYjiHK/XQAAAexJREFUSMe1lDFIW1EUhr9zoWheIUKDWQp2KYjQQCUUQpcurSWLgotUknTIVIqFgh2KlRDSxSlklgZpBLeWN7hIhU6loE4mOlgXKRSVtGAxKtV3OphHQqvkge/90x0+7vnuufdcgTc3VCsV0KcwPg5YYAytxKBeB1NHk0koPBezsoJPMaBVGBu7oLCbdYhEQGeQkRG/CrcJ8BgODzuj+h2NRoMQmIGdHQ9sGYnHgxCYgLU1D+w9GBgIQgCw7c6oXoe5uQAEGhVYWgJG0QvfwiOoVuHaLZicDECgeF/k6Aj0F1Iu/4/IFCwuQl5EGg2/BaS1zKk60SicJpCtLeAhhMNAFk5OwPRDPA6FPyK1mo8dcJMXMXt7QAYtFNqYd9DVBc4oatstUd870IqqCExNwMICEG5+VG6+odvbYD6cf0xuR15+UQ2FIHQHikWQJ5BOg36EzU2QjfNpkwewuwvyAmxbLnfLqaplwWkOXV4GzpBEog1oXg2voFQCViGZBFIQi3k4/G3Y35fOXE5Vu7vhLAKzs6DPIJXy6wpMZyQvIsfH8PYnZDKgv5vj+AkODq4q4KEDl+X1D3V6e0FqyPQ0SBGyWeAuWJaHDRrgOFcQ+DfuI7TSMDQEfEWHh4GbMDgIvEf6+oDP0NMDlGB+/i+uaqK6LvNHWwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0wMy0xM1QxMjoyMjozNSswMDowMGvx7q8AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMDMtMTNUMTI6MjI6MzUrMDA6MDAarFYTAAAAAElFTkSuQmCC"></div>
                            <div
                                class="Style_txt_div__32hGa">
                                <p class="m-0">Phone</p>
                                <p class="m-0">033 02 244288</p>
                        </div>
                    </div>
                    <div class="Style_call1__2XSHO">
                        <div class="Style_callimg__GUqWQ"><img alt="mail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABgAAAAYADwa0LPAAAAB3RJTUUH5QMNDBcq6LU2uAAAAd9JREFUSMfl1D1I1XEUxvHP7991uZpgREu02CCBkEiDNKW4GEIlQUtSGORQQmSDoHWFGqKpaIkiCxWnCIJAsAhCECFJXLTBtmi6RNxehu6l01ARRJGZUtCzn+d7Xh4O/7sSg60RW7fiIFev4rDYuXMdmePSwgLu0NeXwxtx+zZeSu3tuCSt99z19bgpamoysg5pYIA4zZMn643GNRYWMCkND2fEI1FXR9UmWlqIAr29eEiptAbALvHuHbGdgQFyRbFrF2lC5PMZsUd68IBycO8e6YaYnCQ3S0MDZhgbwxARK+fGee7fxyw7dqCN0VEqbdLICPFQmprKvhWks3R2ooWlJcq3OHKE3CPR08PH17S2Yh+Liz8g9rG8THpPRwdVSRw4QHordXWRDvHsGXbT3Y0LpJT9wOiuVF1Nes7Fi1Q2S3NzZHcplykVRXMzsZ+hIZyhUKD0VDQ2EqOiWKT8SpqZIUpcvox2amu/hyUGByNWtNqvJ9jL+DgfJ0R/P3FFqlTYsI3hYSxz8iTyZNmvTH+ngZ+EyzkpJTSRz/+uSYYXfPiwiga+nGp14K/cDJfE9PQqDP5UBfH4cY7cFo4epbLxS1jmRVMTrpPW8ice/5yhOCHNz5OOSadO/YXB/zF9Ai7arlR0niHNAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIxLTAzLTEzVDEyOjIzOjQyKzAwOjAwS1GyBgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMS0wMy0xM1QxMjoyMzo0MiswMDowMDoMCroAAAAASUVORK5CYII="></div>
                        <div
                            class="Style_txt_div__32hGa">
                            <p class="m-0">Email</p>
                            <p class="m-0">info@Chhatt.com</p>
                    </div>
                </div>
                <div class="Style_call2__2BVHN">
                    <div class="Style_callimg__GUqWQ"><img alt="calling" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABgAAAAYADwa0LPAAAAB3RJTUUH5QMNDBU0IIxpWQAAAkZJREFUSMedlU9IVFEUxn/naZCDOitRokUbhRpXgiKDi8IQI1pUiP8WbgIXghCN6ThtoqYxohZKYC7amKBJjIugTdpi1IkRiUATRkRXxUAF6UbSeafFOM7QvHHe89tcePc73/fdc7nnCTagKgKBKHR1gTRDby9oBK2ry6K9QFZXgdswPg7BWzA9DSCimk9b8tu2takWFUGNCyYngfPQ2Wkn8BHWYWoK4megpwdmZ0WSyf9JRv766mcwPGxh/AsOD0FewdJSZk1/P4YHuruh5inq9zvowN1l1ZIScJmQSAAfoKwMuAZ7e2B8RZub4VGfGCsrmbrAFTUbGlKq8/OAF0pLgY+wuwvFn6GyEh6KyP7+CR1wVaH19VnG6axdMDqaa5xG8JMYsRjIT3RsLGvjKpSXw9/3R7qFrkAiqQIrbG/buPs/yNZW7uei3+B22whgPoedHQvhKmhpKexvvoHWVouD3UFyD3DCKwhcUl1bA26Cx5O1sQwjI1C8ANmtTjZBfz/oZRgczOKHYX0dgt9EamudBHip2t4OfE+/51PiHHR0QLBPZGbGQYDjAXQPFheBs+D1OjB2QywGwfvQ2AjWA8k4SSFVYH4Bnw94APknWi7Mi6jPl8/YVoAUQgsi0SjwGubm7LU8HIbQDTEikUJkGwGOT/QOHRoC+uDgwIKQnpDXIRCwq+ogQGhBjHgcNAETExaEptRP6PEFkY0Nu6pil5iB/4eaFRVgrCGbm0AJGAboW7S6Gp6MipFIONd1jOGQmgMDmfV0+AflncQw6gBhegAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0wMy0xM1QxMjoyMTo1MiswMDowMIMOYqUAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMDMtMTNUMTI6MjE6NTIrMDA6MDDyU9oZAAAAAElFTkSuQmCC"></div>
                    <div
                        class="Style_txt_div__32hGa">
                        <p class="m-0">Address</p>
                        <p class="m-0">9-C Khayaban-e-Abbasi, D.H.A Phase 7</p>
                        <p class="m-0">Ext Karachi, city, Sindh 75500</p>
                </div>
        </div>
    </div>
    <div class="Style_sdiv__14QZ2">
        <p><b>Company</b></p>
        <ul>
            <a href="/">
                <li>Home</li>
            </a>
            <li><a href="/real-estate-agencies">Agencies</a></li>
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
        </ul>
    </div>
    <div class="Style_tdiv__2kdYl"><img alt="Chhatt Logo" src="{{ asset('/static/media/chhattLogo.fa186d01.png') }}" title="Chhatt">
        <p>Chhatt is a powerful platform which aims at connecting realtors,builders,developers,brokers with right kind of clientele for variouse types of properties from various mediums. It is a mix of a web platform as well as a mobile application(s)</p>
        <div
            class="Style_play__3GBtc">
            <div class="Style_playHeading__1L9Yc">
                <h1>Get in Touch</h1>
            </div>
            <div class="Style_playIcons__2llv5"><a href="https://www.instagram.com/chhattcom/?igshid=1aynfz0mquewo" class="Style_icon__3oFj- Style_instagram__3u4dG"><svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="25" stroke="currentColor" stroke-width="0" width="25"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
                <a
                    href="https://www.facebook.com/ChhattPK/" class="Style_icon__3oFj- Style_facebook__1iWwQ"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="25" stroke="currentColor" stroke-width="0" width="25"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a>
                    <a
                        href="https://www.youtube.com/channel/UCrQuXvCQMRvNSpaU3znG9cA/featured" class="Style_icon__3oFj- Style_youtube__TDLxj"><svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="25" stroke="currentColor" stroke-width="0" width="25"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a>
                        <a
                            href="https://www.linkedin.com/company/chhatt-com" class="Style_icon__3oFj- Style_linkedin__2lGUP"><svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="25" stroke="currentColor" stroke-width="0" width="25"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg></a>
                            <a
                                class="Style_icon__3oFj- Style_google__18FSk"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="25" stroke="currentColor" stroke-width="0" width="25" style="padding-left:.2rem"><path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg></a>
            </div>
    </div>
    </div>
    </div>
    <div class="Style_footerbottom__2Yugr">
        <div class="Style_footersub_div__1ZRrl">
            <p class="m-0">©2021 <span style="color:#007bff">Chhatt</span>, All rights reserved</p><a class="soll"><button><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" stroke="currentColor" stroke-width="0" width="1em" style="color:#fff;font-size:30px"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path></svg></button></a></div>
    </div>
    </footer>
    </div>
    </div>
    </div>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Chhatt.com",
            "url": "https://chhatt.com/",
            "logo": "https://chhatt.com/static/media/logow.0bbcf4ce.png",
            "alternateName": "Chhatt",
            "sameAs": [
                "https://www.facebook.com/ChhattPK/",
                "https://www.instagram.com/chhattcom/?igshid=1aynfz0mquewo",
                "https://www.linkedin.com/company/chhatt-com",
                "https://www.youtube.com/channel/UCrQuXvCQMRvNSpaU3znG9cA/featured"
            ],
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "033 02 244288",
                "contactType": "customer service",
                "email": "info@Chhatt.com",
                "contactOption": "TollFree",
                "areaServed": "PK",
                "availableLanguage": ["en", "ur"]
            }]
        }
    </script>
    
</body>

</html>
