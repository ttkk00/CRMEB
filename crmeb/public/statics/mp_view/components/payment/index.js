(global["webpackJsonp"]=global["webpackJsonp"]||[]).push([["components/payment/index"],{"257d":function(e,t,n){"use strict";var i=n("ed54"),a=n.n(i);a.a},7522:function(e,t,n){"use strict";n.r(t);var i=n("e877"),a=n.n(i);for(var o in i)"default"!==o&&function(e){n.d(t,e,(function(){return i[e]}))}(o);t["default"]=a.a},"7c54":function(e,t,n){"use strict";n.r(t);var i=n("9314"),a=n("7522");for(var o in a)"default"!==o&&function(e){n.d(t,e,(function(){return a[e]}))}(o);n("257d");var u,r=n("f0c5"),c=Object(r["a"])(a["default"],i["b"],i["c"],!1,null,"8424ba38",null,!1,i["a"],u);t["default"]=c.exports},9314:function(e,t,n){"use strict";var i;n.d(t,"b",(function(){return a})),n.d(t,"c",(function(){return o})),n.d(t,"a",(function(){return i}));var a=function(){var e=this,t=e.$createElement,n=(e._self._c,e.$t("选择付款方式")),i=e.__map(e.payMode,(function(t,n){var i=e.__get_orig(t),a="yue"==t.value?e.$t("￥"):null;return{$orig:i,m1:a}})),a=e.$t("支付"),o=e.$t("￥"),u=e.$t("去付款");e.$mp.data=Object.assign({},{$root:{m0:n,l0:i,m2:a,m3:o,m4:u}})},o=[]},e877:function(e,t,n){"use strict";(function(e){Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i=n("5ba0"),a=o(n("9ad2"));function o(e){return e&&e.__esModule?e:{default:e}}var u={props:{payMode:{type:Array,default:function(){return[]}},pay_close:{type:Boolean,default:!1},order_id:{type:String,default:""},totalPrice:{type:String,default:"0"},isCall:{type:Boolean,default:!1},friendPay:{type:Boolean,default:!1}},mixins:[a.default],data:function(){return{formContent:"",active:0,paytype:"",number:0}},watch:{payMode:{handler:function(e,t){var n=[];e.forEach((function(e,t){e.payStatus&&(e.index=t,n.push(e))})),this.active=n[0].index,this.paytype=n[0].value,this.number=n[0].number||0},immediate:!0,deep:!0}},methods:{payType:function(e,t,n){this.active=n,this.paytype=t,this.number=e,this.$emit("changePayType",t)},close:function(){this.$emit("onChangeFun",{action:"payClose"})},goPay:function(t,n){if(this.isCall)return this.$emit("onChangeFun",{action:"payCheck",value:n});var a=this;return a.order_id?"yue"==n&&parseFloat(t)<parseFloat(a.totalPrice)?a.$util.Tips({title:a.$t("余额不足")}):(e.showLoading({title:a.$t("支付中")}),"friend"==n&&a.order_id?e.navigateTo({url:"/pages/users/payment_on_behalf/index?order_id="+a.order_id+"&spread="+this.$store.state.app.uid,success:function(e){},fail:function(){},complete:function(){}}):void(0,i.orderPay)({uni:a.order_id,paytype:n,type:a.friendPay?1:0,from:"routine"}).then((function(t){var i=t.data.result.jsConfig;switch(n){case"weixin":if(void 0===t.data.result)return a.$util.Tips({title:a.$t("缺少支付参数")});var o="";o=e.requestOrderPayment?"requestOrderPayment":"requestPayment",e[o]({timeStamp:i.timestamp,nonceStr:i.nonceStr,package:i.package,signType:i.signType,paySign:i.paySign,success:function(t){return e.hideLoading(),a.$util.Tips({title:t.msg,icon:"success"},(function(){a.$emit("onChangeFun",{action:"pay_complete"})}))},fail:function(t){return e.hideLoading(),a.$util.Tips({title:a.$t("取消支付")},(function(){a.$emit("onChangeFun",{action:"pay_fail"})}))},complete:function(t){if(e.hideLoading(),"requestPayment:cancel"==t.errMsg||"requestOrderPayment:cancel"==t.errMsg)return a.$util.Tips({title:a.$t("取消支付")},(function(){a.$emit("onChangeFun",{action:"pay_fail"})}))}});break;case"yue":return e.hideLoading(),a.$util.Tips({title:t.msg,icon:"success"},(function(){a.$emit("onChangeFun",{action:"pay_complete"})}));case"offline":return e.hideLoading(),a.$util.Tips({title:t.msg,icon:"success"},(function(){a.$emit("onChangeFun",{action:"pay_complete"})}));case"friend":return e.hideLoading(),a.$util.Tips({title:t.msg,icon:"success"},(function(){a.$emit("onChangeFun",{action:"pay_complete"})}));case"alipay":e.hideLoading(),e.navigateTo({url:"/pages/users/alipay_invoke/index?id=".concat(t.data.result.order_id,"&link=").concat(t.data.result.jsConfig.qrCode)});break}})).catch((function(t){return e.hideLoading(),a.$util.Tips({title:t},(function(){a.$emit("onChangeFun",{action:"pay_fail"})}))}))):a.$util.Tips({title:a.$t("请选择要支付的订单")})}}};t.default=u}).call(this,n("543d")["default"])},ed54:function(e,t,n){}}]);
;(global["webpackJsonp"] = global["webpackJsonp"] || []).push([
    'components/payment/index-create-component',
    {
        'components/payment/index-create-component':(function(module, exports, __webpack_require__){
            __webpack_require__('543d')['createComponent'](__webpack_require__("7c54"))
        })
    },
    [['components/payment/index-create-component']]
]);