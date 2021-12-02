<br><br><br>

<style>
    /*
    h2 {
        margin: 0;
        font-weight: 400;
        line-height: 1.25;
    }*/
    p {
        margin: 0;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    li {
        list-style: none;
    }
    .ui-icon {
        width: 13px;
        display: inline-block;
        vertical-align: middle;
    }
    ::-webkit-input-placeholder {
        font-size: 18px;
        color: #ccc;
        font-weight: 300;
    }
    .ui-list__item {
        display: block;
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: left;
    }
    .ui-list__item {
        border-top: 1px solid #d8d8d8;
    }
    .ui-list__item:first-child {
        border-top: 0;
    }
    .ui-list__item:last-child {
        border-bottom: 1px solid #d8d8d8;
    }
    .ui-badge {
        width: 80px;
        height: 80px;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: inline-block;
        position: relative;
    }
    .ui-badge__icon {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        margin: auto;
        position: absolute;
    }
    .ui-badge--small {
        width: 48px;
        height: 48px;
    }
    .ui-badge--small .ui-badge__icon {
        max-width: 24px;
    }
    @media (min-width: 768px) {
        .ui-list__item:hover {
            background-color: #f5f5f5;
            overflow: hidden;
            position: relative;
        }
        .ui-list__item:hover:after {
            border-left: 5px solid rgba(52, 131, 250, 0.25);
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
        }
    }
    /*! CSS Used from: https://http2.mlstatic.com/resources/frontend/statics/buyingflow-frontend-core/styles/cho__init__large-9a32a95fb5.css */
    .payment-icon {
        display: inline-block;
        text-indent: -9999px;
        vertical-align: 0;
        -ms-flex-item-align: center;
        align-self: center;
    }
    .ui-list__item:hover:after {
        border-left: 0;
    }
    .ui-list__item .ui-radio__label {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
    }
    .ui-list__item .ui-radio__text {
        width: 100%;
    }
    .ui-list__item .ui-radio-element {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        margin-left: 24px;
    }
    .ui-list__item .ui-radio__background {
        left: 0;
    }
    /*! CSS Used from: https://http2.mlstatic.com/resources/frontend/statics/buyingflow-frontend-core/styles/cho__large-d3b1394d7b.css */
    .ui-list__item {
        display: block;
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: left;
    }
    .ui-list__item {
        border-top: 1px solid #d8d8d8;
    }
    .ui-list__item:first-child {
        border-top: 0;
    }
    .ui-list__item:last-child {
        border-bottom: 1px solid #d8d8d8;
    }
    @media (min-width: 768px) {
        .ui-list__item:hover {
            background-color: #f5f5f5;
            overflow: hidden;
            position: relative;
        }
        .ui-list__item:hover:after {
            border-left: 5px solid rgba(52, 131, 250, 0.25);
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
        }
    }
    .payment-icon {
        display: inline-block;
        text-indent: -9999px;
        vertical-align: 0;
        -ms-flex-item-align: center;
        align-self: center;
    }
    .badge-type-selection__list {
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0 auto;
    }
    .badge-type-selection__list .ui-badge--small {
        background: #f5f5f5;
    }
    .badge-type-selection__list .ui-badge--small .ui-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        max-width: 48px;
        max-height: 48px;
        width: 48px;
    }
    .badge-type-selection__list .badge-type-selection__list-item {
        border-bottom: 1px solid #eee;
    }
    .badge-type-selection__list .badge-type-selection__list-item:last-child {
        border-bottom: 0;
    }
    .badge-type-selection__list .ui-badge__icon {
        width: 46px;
    }
    .badge-type-selection__list .ui-badge__icon--payment-logo {
        line-height: 10px;
    }
    .badge-type__metadata {
        text-align: left;
        margin: 0 16px;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        min-width: 0;
    }
    .badge-type-selection__list-title {
        font-size: 16px;
        color: #333;
        line-height: 1.45;
    }
    .badge-type-selection__list-text {
        color: #666;
        font-weight: 400;
        font-size: 14px;
        line-height: 1.25;
        margin-top: 4px;
    }
    .ui-radio-element {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 16px;
        height: 16px;
        cursor: pointer;
        will-change: opacity, transform, border-color, background-color, color;
        position: relative;
        display: inline-block;
        vertical-align: middle;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }
    .ui-radio-element:after,
    .ui-radio-element:before {
        position: absolute;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        opacity: 0;
        pointer-events: none;
        content: "";
        background-color: #3483fa;
    }
    .ui-radio-element:before {
        -webkit-transition: opacity 15ms linear;
        transition: opacity 15ms linear;
        z-index: 1;
    }
    .ui-radio-element:after {
        -webkit-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear;
    }
    .ui-radio__background {
        display: inline-block;
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        height: 100%;
    }
    .ui-radio__background:before {
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: opacity 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: opacity 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: opacity 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: opacity 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        border-radius: 50%;
        opacity: 0;
        pointer-events: none;
        content: "";
        background-color: #3483fa;
    }
    .ui-radio__background:before,
    .ui-radio__outer-circle {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-border-radius: 50%;
    }
    .ui-radio__outer-circle {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: border-color 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: border-color 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0.25);
    }
    .ui-radio__inner-circle {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: background-color 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: background-color 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            background-color 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        transition: transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            background-color 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0.4, 0, 0.6, 1) 0ms;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    .ui-radio__inner-circle,
    .ui-radio__input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .ui-radio__input {
        margin: 0;
        padding: 0;
        opacity: 0;
        cursor: inherit;
        z-index: 1;
    }
    .ui-radio__input:checked + .ui-radio__background .ui-radio__outer-circle {
        -webkit-transition: border-color 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: border-color 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        border-color: #3483fa;
        border-width: 2px;
    }
    .ui-radio__input:checked + .ui-radio__background .ui-radio__inner-circle {
        -webkit-transition: background-color 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: background-color 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            background-color 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            background-color 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        -webkit-transform: scale(0.5);
        -ms-transform: scale(0.5);
        transform: scale(0.5);
        background-color: #3483fa;
    }
    .ui-radio__input:focus + .ui-radio__background:before {
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition: opacity 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: opacity 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: opacity 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        transition: opacity 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms,
            -webkit-transform 0.12s cubic-bezier(0, 0, 0.2, 1) 0ms;
        opacity: 0.26;
    }
    .ui-radio__label {
        position: relative;
        outline: none;
        margin-bottom: 0;
        cursor: pointer;
        color: rgba(0, 0, 0, 0.8);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .ui-radio__text {
        margin-left: 12px;
        font-weight: 400;
        vertical-align: middle;
        font-size: 18px;
    }
    .ui-badge--small .ui-badge__icon {
        max-height: 32px;
    }
    .ui-badge--small .ui-badge__icon--payment-logo {
        max-height: none;
        max-width: none;
        line-height: 10px;
    }
    .ui-list__item:hover:after {
        border-left: 0;
    }
    .ui-list__item .ui-radio__label {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
    }
    .ui-list__item .ui-radio__text {
        width: 100%;
    }
    .ui-list__item .ui-radio-element {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        margin-left: 24px;
    }
    .ui-list__item .ui-radio__background {
        left: 0;
    }
    .badge-type-selection__list {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        max-width: none;
        -webkit-border-radius: 4px;
        border-radius: 4px;
    }
    .badge-type-selection__list .badge-type-selection__list-item {
        width: 100%;
        margin-bottom: 0;
        min-height: 0;
        padding: 0;
    }
    .badge-type-selection__list .badge-type-selection__list-item:not(:last-child) {
        border-bottom: 0;
    }
    .badge-type-selection__list .ui-badge__icon {
        max-width: 24px;
        max-height: 24px;
    }
    .badge-type-selection__list .ui-badge__icon--payment-logo {
        width: 100%;
        max-width: none;
        max-height: none;
        text-align: center;
    }
    .badge-type-selection__list .ui-badge__icon--medium {
        width: 24px;
    }
    .badge-type-selection__list-title {
        font-size: 18px;
        font-weight: 400;
        margin-top: 0;
        line-height: 1.25;
    }
    .badge-type-selection__list-text {
        font-size: 14px;
        color: #999;
        font-weight: 400;
    }
    .badge-type__metadata {
        display: inline-block;
        vertical-align: middle;
        margin: 0;
    }
    .step--payments .badge-type-selection__list {
        margin: 0;
        overflow: hidden;
    }
    .badge-type-selection__list-item .ui-radio__text {
        text-align: left;
        padding: 22px 0;
    }
    .badge-type-selection__list-item .ui-radio__text .ui-badge--small {
        vertical-align: middle;
        margin-left: 12px;
        margin-right: 16px;
    }
    /*! CSS Used from: https://http2.mlstatic.com/secure/payment-logos/v2/payment-sprites-mlm-secure_v_ddbb2eb147.css */
    .payments-cho_badge {
        background: url(https://http2.mlstatic.com/secure/payment-logos/v2/payment-logos-mlm-cho_badge_v_ddbb2eb147.png)
            no-repeat;
    }
    ._debvisa-cho_badge {
        width: 34px;
        height: 34px;
        background-position: left -131px;
    }

</style>

<style>
    /*
        h3 {
            margin: 0;
            font-weight: 400;
            line-height: 1.25;
        }*/
    ::-webkit-input-placeholder {
        font-size: 18px;
        color: #ccc;
        font-weight: 300;
    }
    .ui-badge {
        width: 80px;
        height: 80px;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: inline-block;
        position: relative;
    }
    .ui-badge--small {
        width: 48px;
        height: 48px;
    }
    .item__image--circular {
        overflow-y: hidden;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    /*! CSS Used from: https://http2.mlstatic.com/resources/frontend/statics/buyingflow-frontend-core/styles/cho__init__large-9a32a95fb5.css */
    .u-block-center {
        text-align: center;
    }
    .price-tag {
        line-height: normal;
    }
    img[data-object-fit="cover"] {
        object-fit: cover;
    }
    .cart-aside__content {
        overflow: hidden;
    }
    .cart-aside div:first-of-type {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    }
    .cart-aside__content {
        padding: 48px 24px;
        width: 100%;
    }
    .cart-aside .cart-aside__content {
        padding-top: 0;
        -webkit-transition: padding 0.5s ease-in-out;
        transition: padding 0.5s ease-in-out;
    }
    @media (min-width: 1024px) {
        .cart-aside .cart-aside__content {
            padding: 48px 24px;
            width: 412px;
        }
        .cart-aside div:first-of-type {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
    }
    @media (min-width: 1024px) and (min-width: 1260px) {
        .cart-aside .cart-aside__content {
            padding: 48px;
        }
    }
    /*! CSS Used from: https://http2.mlstatic.com/resources/frontend/statics/buyingflow-frontend-core/styles/cho__large-d3b1394d7b.css */
    .price-tag {
        overflow: visible;
        display: inline-block;
        vertical-align: text-bottom;
        line-height: 1em;
    }
    .price-tag * {
        float: left;
    }
    .price-tag-symbol {
        margin-right: 0.2em;
    }
    .u-block-center {
        text-align: center;
    }
    .price-tag {
        line-height: normal;
    }
    img[data-object-fit="cover"] {
        object-fit: cover;
    }
    .badge__product-icon {
        width: 100%;
        height: 100%;
        object-fit: fill;
        -webkit-border-radius: 100%;
        border-radius: 100%;
    }
    .overview-component__table {
        display: table;
        width: 100%;
    }
    .overview-component__table--auto-width .overview-component__column {
        width: auto;
    }
    .overview-component__row {
        width: 100%;
        display: table-row;
        overflow-y: hidden;
        font-size: 18px;
        line-height: 18px;
    }
    .overview-component__column {
        display: table-cell;
        padding-bottom: 4px;
    }
    .overview-component__column:nth-of-type(2n) {
        text-align: right;
    }
    .overview-component__payments .overview-component__label {
        line-height: 2;
    }
    .overview-component__payments .overview-component__row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
    .overview-component__amounts .price-tag {
        font-size: 18px;
    }
    .overview-component__payments {
        margin: 18px 0;
        padding-top: 14px;
        border-top: 1px solid rgba(51, 51, 51, 0.2);
        font-weight: 400;
    }
    .overview-component__payments .price-tag {
        font-size: 24px;
        font-weight: 400;
    }
    .overview-component__payment {
        font-size: 22px;
    }
    .overview-component__payment .price-tag {
        font-weight: 400;
    }
    .overview__table-container {
        width: 100%;
        margin-bottom: 24px;
    }
    .cart-aside__content {
        overflow: hidden;
    }
    .cart-aside div:first-of-type {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    }
    .cart-aside__content {
        padding: 48px 24px;
        width: 100%;
    }
    .cart-aside .cart-aside__content {
        padding-top: 0;
        -webkit-transition: padding 0.5s ease-in-out;
        transition: padding 0.5s ease-in-out;
    }
    .overview-component__amounts {
        z-index: 1;
    }
    .overview-component__column {
        font-size: 16px;
        font-weight: 300;
        color: #333;
        padding-bottom: 10px;
        vertical-align: middle;
    }
    .overview-component__column .price-free {
        font-size: 18px;
        font-weight: 500;
    }
    .overview-component__item {
        margin-bottom: 24px;
        padding: 0 0 32px;
        border-bottom: 1px solid #e6e6e6;
    }
    .overview-component__item .ui-badge--picture {
        margin-bottom: 10px;
    }
    .overview-component__item-title {
        font-size: 16px;
        font-weight: 300;
        color: #333;
        margin-bottom: 8px;
        padding: 0 40px;
    }
    .overview-component__item-subtitle {
        display: inline-block;
        font-size: 14px;
        color: #999;
        margin-bottom: 24px;
    }
    .overview-component__item-quantity-text {
        color: #333;
        display: block;
        font-size: 14px;
    }
    .overview-component__label {
        font-size: 20px;
        font-weight: 400;
    }
    .overview-component__payments {
        margin: 10px 0;
        padding-top: 18px;
        border-top: 1px solid #e6e6e6;
    }
    .overview-component__payments .overview-component__column {
        vertical-align: middle;
    }
    .overview-component__payments .overview-component__column .price-tag {
        font-size: 20px;
        font-weight: 400;
    }
    .overview-component__payments .overview-component__label {
        line-height: 18px;
    }
    .overview-component__payments .overview-component__payments-text {
        vertical-align: top;
        padding-top: 6px;
    }
    .overview-component__payments .overview-component__payment {
        font-size: 20px;
        line-height: 20px;
    }
    .overview-component__amounts .price-tag {
        vertical-align: middle;
        font-weight: 300;
    }
    .overview__table-container {
        margin-bottom: 16px;
    }
    @media (min-width: 1024px) {
        .cart-aside .cart-aside__content {
            padding: 48px 24px;
            width: 412px;
        }
        .cart-aside div:first-of-type {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
    }
    @media (min-width: 1024px) and (min-width: 1260px) {
        .cart-aside .cart-aside__content {
            padding: 48px;
        }
    }

</style>

<style>
    .u-link {
        color: #3483fa;
        cursor: pointer;
    }
    /*
        h3 {
            margin: 0;
            font-weight: 400;
            line-height: 1.25;
        }
        button {
            font-family: inherit;
        }*/
    .ui-icon {
        width: 13px;
        display: inline-block;
        vertical-align: middle;
    }
    ::-webkit-input-placeholder {
        font-size: 18px;
        color: #ccc;
        font-weight: 300;
    }
    .ui-badge {
        width: 80px;
        height: 80px;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: inline-block;
        position: relative;
    }
    .ui-badge__icon {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        margin: auto;
        position: absolute;
    }
    .ui-badge--small {
        width: 48px;
        height: 48px;
    }
    .ui-badge--small .ui-badge__icon {
        max-width: 24px;
    }
    /*! CSS Used from: https://http2.mlstatic.com/resources/frontend/statics/buyingflow-frontend-core/styles/cho__init__large-9a32a95fb5.css */
    .u-link {
        color: #3483fa;
        font-size: 14px;
    }
    /*
    button {
        font-family: Proxima Nova, Helvetica Neue, Helvetica, Roboto, Arial,
            sans-serif;
        font-size: inherit;
        font-weight: 300;
        padding: 0;
        width: 100%;
    }*/
    .u-link {
        font-weight: 400;
    }
    /*
    button {
        border: 0;
        background: none;
        cursor: pointer;
    }*/
    /*! CSS Used from: https://http2.mlstatic.com/resources/frontend/statics/buyingflow-frontend-core/styles/cho__large-d3b1394d7b.css */
    .u-link {
        color: #3483fa;
        font-size: 14px;
    }
    /*
    button {
        font-family: Proxima Nova, Helvetica Neue, Helvetica, Roboto, Arial,
            sans-serif;
        font-size: inherit;
        font-weight: 300;
        padding: 0;
        width: 100%;
    }*/
    .u-link {
        font-weight: 400;
    }
    /*
    button {
        border: 0;
        background: none;
        cursor: pointer;
    }*/
    .hero__info-title {
        font-size: 16px;
        color: #333;
    }
    .hero__info-subtitle:not(.u-text--green) {
        color: #666;
        font-weight: 300;
    }
    .hero__info-subtitle--new-line {
        display: block;
    }
    .hero {
        padding: 32px;
    }
    .hero__action-button {
        font-weight: 400;
    }
    .hero--ellipsis .hero__info-subtitle,
    .hero--ellipsis .hero__info-title {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        display: block;
    }
    .hero--contained {
        padding: 0;
    }
    .ui-badge--small .ui-badge__icon {
        max-height: 32px;
    }
    .shipping-context .hero__info-subtitle {
        padding-top: 0;
    }
    .hero {
        padding: 16px 32px;
        background-color: #f5f5f5;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        text-align: left;
    }
    .hero__main-content-wrapper,
    .hero__wrapper {
        display: table;
        width: 100%;
    }
    .hero__info,
    .hero__main-content {
        display: table-cell;
        vertical-align: middle;
    }
    .hero__icon {
        display: table-cell;
        vertical-align: top;
        padding-right: 24px;
        width: 48px;
    }
    .hero__icon .ui-badge {
        background-color: #fff;
        display: block;
    }
    .hero__icon .ui-badge__icon--medium {
        width: 24px;
    }
    .hero__action {
        margin-top: 8px;
        display: table-row;
    }
    .hero__action-button {
        text-align: left;
        white-space: nowrap;
    }
    .hero__table-row {
        display: table-row;
    }
    .hero__table-cell {
        display: table-cell;
    }
    .hero__info-title {
        max-width: 345px;
    }
    .hero__info-subtitle {
        font-size: 14px;
        max-width: 345px;
    }
    .hero__icon .ui-badge__icon--medium {
        width: 48px;
        max-width: 48px;
        max-height: 48px;
    }
    @media (min-width: 1024px) {
        .hero {
            padding: 20px 32px;
        }
        .hero__main-content {
            width: 100%;
        }
        .hero__action {
            margin-top: 0;
            padding-left: 8px;
            display: table-cell;
            vertical-align: middle;
        }
        .hero__action-button {
            text-align: right;
        }
    }
    @media (min-width: 1024px) and (max-width: 1080px) {
        .hero__info-subtitle,
        .hero__info-title {
            max-width: 260px;
        }
    }
    @media (min-width: 1024px) and (min-width: 1260px) {
        .hero__info-subtitle,
        .hero__info-title {
            max-width: 428px;
        }
    }


</style>

<h4>¿Como quieres pagar?</h4>

<div class="row">
    <div class="col-8">
        <span>Domicilio</span><br><br>

        <div data-id="hero-shipping" class="hero hero-shipping  hero--contained hero--ellipsis">
            <div class="hero__wrapper">
                <div class="hero__table-row">
                    <div class="hero__icon" data-js="hero-icon">
                        <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                    </div>

                    <div class="hero__main-content" data-js="hero-main-content">
                        <div class="hero__main-content-wrapper">
                            <div class="hero__info" data-js="hero-info">
                                <h3 data-id="hero-shipping-title" class="hero__info-title">
                                    C.P. 86992
                                </h3>
                                <span data-id="hero-shipping-subtitle" class="hero__info-subtitle ">
                                    CIPRES SN - - COLONIA ARBOLEDAS - Emiliano Zapata, Tabasco
                                </span>

                                <span class="hero__info-subtitle hero__info-subtitle--new-line">
                                    CARLOS DANIEL ANGEL PADILLA - 9341174666
                                </span>

                            </div>
                            <div class="hero__action" data-js="hero-action">
                                <form data-js="show-addresses" method="post">
                                    <a data-js="next-step" data-input-id="nextStepAddressChange" class=" hero__action-button u-link" name="nextStepAddressChange" value="nextStepAddressChange" style="text-decoration: none;">
                                        Editar o elegir otro
                                    </a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="hero__table-row">
                    <div class="hero__table-cell"></div>
                    <div class="hero__table-cell">

                    </div>
                </div>
            </div>
        </div>

        <br><br><span>Con tarjetas</span><br><br>
        <div data-js="payments-types" data-stored="true">
            <ul class="badge-type-selection__list">
                <li class="badge-type-selection__list-item ui-list__item">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">
                                <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="DEBIT_CARD" required="" aria-invalid="false">
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>
                                <input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="debvisa">
                                <input data-js="payment-type-card-id" type="hidden" name="cardId" value="8933425523">
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small">
                                    <span class="ui-badge__icon ui-badge__icon--payment-logo">
                                        <i class="payment-icon payments-cho_badge _debvisa-cho_badge"></i>
                                    </span>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title" aria-label="Bancomer terminada en 1382">Bancomer Débito&nbsp;****&nbsp;1382</h2>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>

                <li class="badge-type-selection__list-item ui-list__item" data-toggle="modal" data-target="#exampleModal">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">
                                <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="DEBIT_CARD" required="" aria-invalid="false">
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>
                                <input data-js="payment-type-name" type="hidden" value="DEBIT_CARD">
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                                    <i class="far fa-credit-card"></i>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title">Nueva tarjeta de débito</h2>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>
            </ul>
        </div>


        <br><br><span>Con otras formas de pago</span><br><br>

        <article class="ui-list ui-panel--raised" data-js="payments-types" data-stored="false" role="list" aria-label="Con otras formas de pago">
            <ul class="badge-type-selection__list">
                <li class="badge-type-selection__list-item ui-list__item">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">
                                <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="BANK_TRANSFER" required="" aria-invalid="false">
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>
                                <input data-js="payment-type-name" type="hidden" value="BANK_TRANSFER">
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                                    <i class="fas fa-university"></i>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title">Transferencia electrónica</h2>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>
                <li class="badge-type-selection__list-item ui-list__item">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">
                                <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="TICKET" required="" aria-invalid="false">
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>
                                <input data-js="payment-type-name" type="hidden" value="TICKET">
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                                    <i class="fas fa-ticket-alt"></i>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title">Efectivo en puntos de pago</h2>
                                    <p class="badge-type-selection__list-text">
                                        7-Eleven, BBVA Bancomer, Citibanamex, OXXO y Otros

                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>
            </ul>
        </article>
        <br>
        <button class="btn btn-primary float-right" style="max-width: 16%;">Continuar</button>

    </div>
    <div class="col-4">

        <section class="cart-aside__content" style="background-color: #f5f5f5;">
            <div class="overview-component__item u-block-center">
                <span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
                    <img class="badge__product-icon picture-image" src="https://http2.mlstatic.com/D_NQ_NP_938030-MLM48259905831_112021-Z.jpg" srcset="https://http2.mlstatic.com/D_NQ_NP_938030-MLM48259905831_112021-Z.jpg " alt="Reloj Casio F91w Caballero Retro Vintage Clasico 100%orginal" data-object-fit="cover">
                </span>
                <h3 class="overview-component__item-title">
                    Reloj Casio F91w Caballero Retro Vintage Clasico 100%orginal
                </h3>
                <span class="overview-component__item-subtitle">Color de la correa: Negro</span>
                <span class="overview-component__item-quantity-text">Cantidad: 1</span>
            </div>

            <div class="overview__table-container">
                <div class="overview-component__amounts">
                    <div class="overview-component__table">
                        <div class="overview-component__row">
                            <div data-id="overview-items-quantity" class="overview-component__column">
                                Producto
                            </div>
                            <div data-id="overview-items-price" class="overview-component__column" aria-label="385 pesos">
                                <span aria-hidden="true">
                                    <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="385">

                                        <span class="price-tag-symbol" itemprop="priceCurrency" aria-hidden="true">$</span>
                                        <span class="price-tag-fraction">385</span>

                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="overview-component__row">
                            <div class="overview-component__column">
                                Envío
                            </div>
                            <div data-id="overview-shipping-amount" class="overview-component__column" aria-label="Gratis">
                                <span aria-hidden="true">
                                    <span class="price-free u-text--green">
                                        Gratis

                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overview-component__payments">
                    <div class="overview-component__table overview-component__table--auto-width">
                        <div class="overview-component__row">
                            <div class="overview-component__column overview-component__payments-text">
                                <span class="overview-component__label">
                                    Pagas
                                </span>
                            </div>
                            <div class="overview-component__column">
                                <div class="overview-component__payment" aria-label="385 pesos">
                                    <span aria-hidden="true">
                                        <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <meta itemprop="price" content="385">

                                            <span class="price-tag-symbol" itemprop="priceCurrency" aria-hidden="true">$</span>
                                            <span class="price-tag-fraction">385</span>

                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>


<style>

    .wrapper {
        min-height: 100vh;
        display: flex;
        padding: 50px 15px;
    }
    @media screen and (max-width: 700px), (max-height: 500px) {
        .wrapper {
            flex-wrap: wrap;
            flex-direction: column;
        }
    }

    .card-form {
        max-width: 570px;
        margin: auto;
        width: 100%;
    }
    @media screen and (max-width: 576px) {
        .card-form {
            margin: 0 auto;
        }
    }
    .card-form__inner {
        background: #fff;
        box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
        border-radius: 10px;
        padding: 35px;
        padding-top: 180px;
    }
    @media screen and (max-width: 480px) {
        .card-form__inner {
            padding: 25px;
            padding-top: 165px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-form__inner {
            padding: 15px;
            padding-top: 165px;
        }
    }
    .card-form__row {
        display: flex;
        align-items: flex-start;
    }
    @media screen and (max-width: 480px) {
        .card-form__row {
            flex-wrap: wrap;
        }
    }
    .card-form__col {
        flex: auto;
        margin-right: 35px;
    }
    .card-form__col:last-child {
        margin-right: 0;
    }
    @media screen and (max-width: 480px) {
        .card-form__col {
            margin-right: 0;
            flex: unset;
            width: 100%;
            margin-bottom: 20px;
        }
        .card-form__col:last-child {
            margin-bottom: 0;
        }
    }
    .card-form__col.-cvv {
        max-width: 150px;
    }
    @media screen and (max-width: 480px) {
        .card-form__col.-cvv {
            max-width: initial;
        }
    }
    .card-form__group {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
    }
    .card-form__group .card-input__input {
        flex: 1;
        margin-right: 15px;
    }
    .card-form__group .card-input__input:last-child {
        margin-right: 0;
    }
    .card-form__button {
        width: 100%;
        height: 55px;
        background: #2364d2;
        border: none;
        border-radius: 5px;
        font-size: 22px;
        font-weight: 500;
        font-family: "Source Sans Pro", sans-serif;
        box-shadow: 3px 10px 20px 0px rgba(35, 100, 210, 0.3);
        color: #fff;
        margin-top: 20px;
        cursor: pointer;
    }
    @media screen and (max-width: 480px) {
        .card-form__button {
            margin-top: 10px;
        }
    }

    .card-item {
        max-width: 430px;
        height: 270px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 2;
        width: 100%;
    }
    @media screen and (max-width: 480px) {
        .card-item {
            max-width: 310px;
            height: 220px;
            width: 90%;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item {
            height: 180px;
        }
    }
    .card-item.-active .card-item__side.-front {
        transform: perspective(1000px) rotateY(180deg) rotateX(0deg) rotateZ(0deg);
    }
    .card-item.-active .card-item__side.-back {
        transform: perspective(1000px) rotateY(0) rotateX(0deg) rotateZ(0deg);
    }
    .card-item__focus {
        position: absolute;
        z-index: 3;
        border-radius: 5px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transition: all 0.35s cubic-bezier(0.71, 0.03, 0.56, 0.85);
        opacity: 0;
        pointer-events: none;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.65);
    }
    .card-item__focus:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background: #08142f;
        height: 100%;
        border-radius: 5px;
        filter: blur(25px);
        opacity: 0.5;
    }
    .card-item__focus.-active {
        opacity: 1;
    }
    .card-item__side {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 60px 0 rgba(14, 42, 90, 0.55);
        transform: perspective(2000px) rotateY(0deg) rotateX(0deg) rotate(0deg);
        transform-style: preserve-3d;
        transition: all 0.8s cubic-bezier(0.71, 0.03, 0.56, 0.85);
        backface-visibility: hidden;
        height: 100%;
    }
    .card-item__side.-back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        transform: perspective(2000px) rotateY(-180deg) rotateX(0deg) rotate(0deg);
        z-index: 2;
        padding: 0;
        height: 100%;
    }
    .card-item__side.-back .card-item__cover {
        transform: rotateY(-180deg);
    }
    .card-item__bg {
        max-width: 100%;
        display: block;
        max-height: 100%;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }
    .card-item__cover {
        height: 100%;
        background-color: #1c1d27;
        position: absolute;
        height: 100%;
        background-color: #1c1d27;
        left: 0;
        top: 0;
        width: 100%;
        border-radius: 15px;
        overflow: hidden;
    }
    .card-item__cover:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(6, 2, 29, 0.45);
    }
    .card-item__top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 40px;
        padding: 0 10px;
    }
    @media screen and (max-width: 480px) {
        .card-item__top {
            margin-bottom: 25px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__top {
            margin-bottom: 15px;
        }
    }
    .card-item__chip {
        width: 60px;
    }
    @media screen and (max-width: 480px) {
        .card-item__chip {
            width: 50px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__chip {
            width: 40px;
        }
    }
    .card-item__type {
        height: 45px;
        position: relative;
        display: flex;
        justify-content: flex-end;
        max-width: 100px;
        margin-left: auto;
        width: 100%;
    }
    @media screen and (max-width: 480px) {
        .card-item__type {
            height: 40px;
            max-width: 90px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__type {
            height: 30px;
        }
    }
    .card-item__typeImg {
        max-width: 100%;
        object-fit: contain;
        max-height: 100%;
        object-position: top right;
    }
    .card-item__info {
        color: #fff;
        width: 100%;
        max-width: calc(100% - 85px);
        padding: 10px 15px;
        font-weight: 500;
        display: block;
        cursor: pointer;
    }
    @media screen and (max-width: 480px) {
        .card-item__info {
            padding: 10px;
        }
    }
    .card-item__holder {
        opacity: 0.7;
        font-size: 13px;
        margin-bottom: 6px;
    }
    @media screen and (max-width: 480px) {
        .card-item__holder {
            font-size: 12px;
            margin-bottom: 5px;
        }
    }
    .card-item__wrapper {
        font-family: "Source Code Pro", monospace;
        padding: 25px 15px;
        position: relative;
        z-index: 4;
        height: 100%;
        text-shadow: 7px 6px 10px rgba(14, 42, 90, 0.8);
        user-select: none;
    }
    @media screen and (max-width: 480px) {
        .card-item__wrapper {
            padding: 20px 10px;
        }
    }
    .card-item__name {
        font-size: 18px;
        line-height: 1;
        white-space: nowrap;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
    }
    @media screen and (max-width: 480px) {
        .card-item__name {
            font-size: 16px;
        }
    }
    .card-item__nameItem {
        display: inline-block;
        min-width: 8px;
        position: relative;
    }
    .card-item__number {
        font-weight: 500;
        line-height: 1;
        color: #fff;
        font-size: 27px;
        margin-bottom: 35px;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
    }
    @media screen and (max-width: 480px) {
        .card-item__number {
            font-size: 21px;
            margin-bottom: 15px;
            padding: 10px 10px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__number {
            font-size: 19px;
            margin-bottom: 10px;
            padding: 10px 10px;
        }
    }
    .card-item__numberItem {
        width: 16px;
        display: inline-block;
    }
    .card-item__numberItem.-active {
        width: 30px;
    }
    @media screen and (max-width: 480px) {
        .card-item__numberItem {
            width: 13px;
        }
        .card-item__numberItem.-active {
            width: 16px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__numberItem {
            width: 12px;
        }
        .card-item__numberItem.-active {
            width: 8px;
        }
    }
    .card-item__content {
        color: #fff;
        display: flex;
        align-items: flex-start;
    }
    .card-item__date {
        flex-wrap: wrap;
        font-size: 18px;
        margin-left: auto;
        padding: 10px;
        display: inline-flex;
        width: 80px;
        white-space: nowrap;
        flex-shrink: 0;
        cursor: pointer;
    }
    @media screen and (max-width: 480px) {
        .card-item__date {
            font-size: 16px;
        }
    }
    .card-item__dateItem {
        position: relative;
    }
    .card-item__dateItem span {
        width: 22px;
        display: inline-block;
    }
    .card-item__dateTitle {
        opacity: 0.7;
        font-size: 13px;
        padding-bottom: 6px;
        width: 100%;
    }
    @media screen and (max-width: 480px) {
        .card-item__dateTitle {
            font-size: 12px;
            padding-bottom: 5px;
        }
    }
    .card-item__band {
        background: rgba(0, 0, 19, 0.8);
        width: 100%;
        height: 50px;
        margin-top: 30px;
        position: relative;
        z-index: 2;
    }
    @media screen and (max-width: 480px) {
        .card-item__band {
            margin-top: 20px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__band {
            height: 40px;
            margin-top: 10px;
        }
    }
    .card-item__cvv {
        text-align: right;
        position: relative;
        z-index: 2;
        padding: 15px;
    }
    .card-item__cvv .card-item__type {
        opacity: 0.7;
    }
    @media screen and (max-width: 360px) {
        .card-item__cvv {
            padding: 10px 15px;
        }
    }
    .card-item__cvvTitle {
        padding-right: 10px;
        font-size: 15px;
        font-weight: 500;
        color: #fff;
        margin-bottom: 5px;
    }
    .card-item__cvvBand {
        height: 45px;
        background: #fff;
        margin-bottom: 30px;
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 10px;
        color: #1a3b5d;
        font-size: 18px;
        border-radius: 4px;
        box-shadow: 0px 10px 20px -7px rgba(32, 56, 117, 0.35);
    }
    @media screen and (max-width: 480px) {
        .card-item__cvvBand {
            height: 40px;
            margin-bottom: 20px;
        }
    }
    @media screen and (max-width: 360px) {
        .card-item__cvvBand {
            margin-bottom: 15px;
        }
    }

    .card-list {
        margin-bottom: -130px;
    }
    @media screen and (max-width: 480px) {
        .card-list {
            margin-bottom: -120px;
        }
    }

    .card-input {
        margin-bottom: 20px;
    }
    .card-input__label {
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: 500;
        color: #1a3b5d;
        width: 100%;
        display: block;
        user-select: none;
    }
    .card-input__input {
        width: 100%;
        height: 50px;
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid #ced6e0;
        transition: all 0.3s ease-in-out;
        font-size: 18px;
        padding: 5px 15px;
        background: none;
        color: #1a3b5d;
        font-family: "Source Sans Pro", sans-serif;
    }
    .card-input__input:hover, .card-input__input:focus {
        border-color: #3d9cff;
    }
    .card-input__input:focus {
        box-shadow: 0px 10px 20px -13px rgba(32, 56, 117, 0.35);
    }
    .card-input__input.-select {
        -webkit-appearance: none;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAeCAYAAABuUU38AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUxJREFUeNrM1sEJwkAQBdCsngXPHsQO9O5FS7AAMVYgdqAd2IGCDWgFnryLFQiCZ8EGnJUNimiyM/tnk4HNEAg/8y6ZmMRVqz9eUJvRaSbvutCZ347bXVJy/ZnvTmdJ862Me+hAbZCTs6GHpyUi1tTSvPnqTpoWZPUa7W7ncT3vK4h4zVejy8QzM3WhVUO8ykI6jOxoGA4ig3BLHcNFSCGqGAkig2yqgpEiMsjSfY9LxYQg7L6r0X6wS29YJiYQYecemY+wHrXD1+bklGhpAhBDeu/JfIVGxaAQ9sb8CI+CQSJ+QmJg0Ii/EE2MBiIXooHRQhRCkBhNhBcEhLkwf05ZCG8ICCOpk0MULmvDSY2M8UawIRExLIQIEgHDRoghihgRIgiigBEjgiFATBACAgFgghEwSAAGgoBCBBgYAg5hYKAIFYgHBo6w9RRgAFfy160QuV8NAAAAAElFTkSuQmCC");
        background-size: 12px;
        background-position: 90% center;
        background-repeat: no-repeat;
        padding-right: 30px;
    }

    .slide-fade-up-enter-active {
        transition: all 0.25s ease-in-out;
        transition-delay: 0.1s;
        position: relative;
    }

    .slide-fade-up-leave-active {
        transition: all 0.25s ease-in-out;
        position: absolute;
    }

    .slide-fade-up-enter {
        opacity: 0;
        transform: translateY(15px);
        pointer-events: none;
    }

    .slide-fade-up-leave-to {
        opacity: 0;
        transform: translateY(-15px);
        pointer-events: none;
    }

    .slide-fade-right-enter-active {
        transition: all 0.25s ease-in-out;
        transition-delay: 0.1s;
        position: relative;
    }

    .slide-fade-right-leave-active {
        transition: all 0.25s ease-in-out;
        position: absolute;
    }

    .slide-fade-right-enter {
        opacity: 0;
        transform: translateX(10px) rotate(45deg);
        pointer-events: none;
    }

    .slide-fade-right-leave-to {
        opacity: 0;
        transform: translateX(-10px) rotate(45deg);
        pointer-events: none;
    }

    .github-btn {
        position: absolute;
        right: 40px;
        bottom: 50px;
        text-decoration: none;
        padding: 15px 25px;
        border-radius: 4px;
        box-shadow: 0px 4px 30px -6px rgba(36, 52, 70, 0.65);
        background: #24292e;
        color: #fff;
        font-weight: bold;
        letter-spacing: 1px;
        font-size: 16px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }
    @media screen and (min-width: 500px) {
        .github-btn:hover {
            transform: scale(1.1);
            box-shadow: 0px 17px 20px -6px rgba(36, 52, 70, 0.36);
        }
    }
    @media screen and (max-width: 700px) {
        .github-btn {
            position: relative;
            bottom: auto;
            right: auto;
            margin-top: 20px;
        }
        .github-btn:active {
            transform: scale(1.1);
            box-shadow: 0px 17px 20px -6px rgba(36, 52, 70, 0.36);
        }
    }
</style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Tarjeta de debito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <div class="wrapper" id="app">
                    <div class="card-form">
                        <div class="card-list">
                            <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
                                <div class="card-item__side -front">
                                    <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
                                    <div class="card-item__cover">
                                        <img
                                            v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + currentCardBackground + '.jpeg'" class="card-item__bg">
                                    </div>

                                    <div class="card-item__wrapper">
                                        <div class="card-item__top">
                                            <img src="<?= Yii::$app->homeUrl ?>resources/card/chip.png" class="card-item__chip">
                                            <div class="card-item__type">
                                                <transition name="slide-fade-up">
                                                    <img v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                                                </transition>
                                            </div>
                                        </div>
                                        <label for="cardNumber" class="card-item__number" ref="cardNumber">
                                            <template v-if="getCardType === 'amex'">
                                                <span v-for="(n, $index) in amexCardMask" :key="$index">
                                                    <transition name="slide-fade-up">
                                                        <div
                                                            class="card-item__numberItem"
                                                            v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''"
                                                            >*</div>
                                                        <div class="card-item__numberItem"
                                                             :class="{ '-active' : n.trim() === '' }"
                                                             :key="$index" v-else-if="cardNumber.length > $index">
                                                             {{cardNumber[$index]}}
                                                    </div>
                                                    <div
                                                        class="card-item__numberItem"
                                                        :class="{ '-active' : n.trim() === '' }"
                                                        v-else
                                                        :key="$index + 1"
                                                        >{{n}}</div>
                                                </transition>
                                            </span>
                                        </template>

                                        <template v-else>
                                            <span v-for="(n, $index) in otherCardMask" :key="$index">
                                                <transition name="slide-fade-up">
                                                    <div
                                                        class="card-item__numberItem"
                                                        v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''"
                                                        >*</div>
                                                    <div class="card-item__numberItem"
                                                         :class="{ '-active' : n.trim() === '' }"
                                                         :key="$index" v-else-if="cardNumber.length > $index">
                                                         {{cardNumber[$index]}}
                                                </div>
                                                <div
                                                    class="card-item__numberItem"
                                                    :class="{ '-active' : n.trim() === '' }"
                                                    v-else
                                                    :key="$index + 1"
                                                    >{{n}}</div>
                                            </transition>
                                        </span>
                                    </template>
                                </label>
                                <div class="card-item__content">
                                    <label for="cardName" class="card-item__info" ref="cardName">
                                        <div class="card-item__holder">Titular de la tarjeta</div>
                                        <transition name="slide-fade-up">
                                            <div class="card-item__name" v-if="cardName.length" key="1">
                                                <transition-group name="slide-fade-right">
                                                    <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                                                </transition-group>
                                            </div>
                                            <div class="card-item__name" v-else key="2">Nombre Completo</div>
                                        </transition>
                                    </label>
                                    <div class="card-item__date" ref="cardDate">
                                        <label for="cardMonth" class="card-item__dateTitle">Expira</label>
                                        <label for="cardMonth" class="card-item__dateItem">
                                            <transition name="slide-fade-up">
                                                <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                                                <span v-else key="2">MM</span>
                                            </transition>
                                        </label>
                                        /
                                        <label for="cardYear" class="card-item__dateItem">
                                            <transition name="slide-fade-up">
                                                <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                                                <span v-else key="2">YY</span>
                                            </transition>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-item__side -back">
                            <div class="card-item__cover">
                                <img
                                    v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + currentCardBackground + '.jpeg'" class="card-item__bg">
                            </div>
                            <div class="card-item__band"></div>
                            <div class="card-item__cvv">
                                <div class="card-item__cvvTitle">CVV</div>
                                <div class="card-item__cvvBand">
                                    <span v-for="(n, $index) in cardCvv" :key="$index">
                                        *
                                    </span>

                                </div>
                                <div class="card-item__type">
                                    <img v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-form__inner">
                    <div class="card-input">
                        <label for="cardNumber" class="card-input__label">Número de tarjeta</label>
                        <input type="text" id="cardNumber" class="card-input__input" v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off">
                    </div>
                    <div class="card-input">
                        <label for="cardName" class="card-input__label">Titular de tarjeta</label>
                        <input type="text" id="cardName" class="card-input__input" v-model="cardName" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off">
                    </div>
                    <div class="card-form__row">
                        <div class="card-form__col">
                            <div class="card-form__group">
                                <label for="cardMonth" class="card-input__label">Fecha de expiracion</label>
                                <select class="card-input__input -select" id="cardMonth" v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                                    <option value="" disabled selected>Mes</option>
                                    <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                                        {{n < 10 ? '0' + n : n}}
                                    </option>
                                </select>
                                <select class="card-input__input -select" id="cardYear" v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                                    <option value="" disabled selected>Año</option>
                                    <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                                        {{$index + minCardYear}}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-form__col -cvv">
                            <div class="card-input">
                                <label for="cardCvv" class="card-input__label">CVV</label>
                                <input type="text" class="card-input__input" id="cardCvv" v-mask="'####'" maxlength="4" v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <button class="card-form__button">
                        Continuar
                    </button>
                </div>
            </div>

        </div>



    </div>
    <!--
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>-->
</div>
</div>
</div>
<script src="<?= Yii::$app->homeUrl ?>js/vue.min.js" type="text/javascript"></script>
<script src="<?= Yii::$app->homeUrl ?>js/vue-the-mask.js" type="text/javascript"></script>

<script>
new Vue({
    el: "#app",
    data() {
        return {
            currentCardBackground: Math.floor(Math.random() * 25 + 1), // just for fun :D
            cardName: "",
            cardNumber: "",
            cardMonth: "",
            cardYear: "",
            cardCvv: "",
            minCardYear: new Date().getFullYear(),
            amexCardMask: "#### ###### #####",
            otherCardMask: "#### #### #### ####",
            cardNumberTemp: "",
            isCardFlipped: false,
            focusElementStyle: null,
            isInputFocused: false
        };
    },
    mounted() {
        this.cardNumberTemp = this.otherCardMask;
        document.getElementById("cardNumber").focus();
    },
    computed: {
        getCardType() {
            let number = this.cardNumber;
            let re = new RegExp("^4");
            if (number.match(re) != null)
                return "visa";

            re = new RegExp("^(34|37)");
            if (number.match(re) != null)
                return "amex";

            re = new RegExp("^5[1-5]");
            if (number.match(re) != null)
                return "mastercard";

            re = new RegExp("^6011");
            if (number.match(re) != null)
                return "discover";

            re = new RegExp('^9792')
            if (number.match(re) != null)
                return 'troy'

            return "visa"; // default type
        },
        generateCardNumberMask() {
            return this.getCardType === "amex" ? this.amexCardMask : this.otherCardMask;
        },
        minCardMonth() {
            if (this.cardYear === this.minCardYear)
                return new Date().getMonth() + 1;
            return 1;
        }
    },
    watch: {
        cardYear() {
            if (this.cardMonth < this.minCardMonth) {
                this.cardMonth = "";
            }
        }
    },
    methods: {
        flipCard(status) {
            this.isCardFlipped = status;
        },
        focusInput(e) {
            this.isInputFocused = true;
            let targetRef = e.target.dataset.ref;
            let target = this.$refs[targetRef];
            this.focusElementStyle = {
                width: `${target.offsetWidth}px`,
                height: `${target.offsetHeight}px`,
                transform: `translateX(${target.offsetLeft}px) translateY(${target.offsetTop}px)`
            }
        },
        blurInput() {
            let vm = this;
            setTimeout(() => {
                if (!vm.isInputFocused) {
                    vm.focusElementStyle = null;
                }
            }, 300);
            vm.isInputFocused = false;
        }
    }
});
</script>