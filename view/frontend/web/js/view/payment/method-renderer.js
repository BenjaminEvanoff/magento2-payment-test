define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'custompayment',
                component: 'Emipro_Moneropayment/js/view/payment/method-renderer/custompayment'
            }
        );
        return Component.extend({});
    }
);
