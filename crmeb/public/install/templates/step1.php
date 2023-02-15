<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $Title; ?> - <?php echo $Powered; ?></title>
    <link rel="stylesheet" href="./css/install.css?v=9.0"/>
    <link rel="stylesheet" href="./css/step1.css?v=9.0"/>
    <link rel="stylesheet" href="./css/theme-chalk.css">
    <script src="./js/vue2.6.11.js"></script>
    <script src="./js/element-ui.js?v=9.0"></script>
</head>
<body>
<div class="wrap" id="step1">
    <!--  --><?php //require './templates/header.php';?>
    <div class="title">
        <img class="logo" src="./images/install/logo-step1.png" alt="">
        <h1>欢迎使用 CRMEB开源版</h1>
        <div class="df agreement cp">
            <div class="radio-box" :class="{'is-shock': isShock}" @click="radio = !radio">
                <img v-if="radio" src="./images/install/success.png" alt="">
            </div>
            <span @click="radio = !radio">详细阅读并勾选同意</span>
            <span class="agreements" @click.stop="isShow = 1">《软件使用协议》</span>
        </div>
        <div class="bottom tac"> <span class="btn" :class="{'more-text': radio}" @click="jump">
              开始安装</span></div>
        <img class="solgen" src="./images/install/solgen.png" alt="">
    </div>
    <div class="section" v-if="isShow">
        <div class="main cc">
          <pre class="pact" readonly="readonly">
          <h1 class="title">软件许可协议</h1>
提示条款：
<strong>本协议是您因使用CRMEB开源商城系统软件与西安众邦网络科技有限公司所订立的有效合约。</strong>
CRMEB是国内稳定、强大、先进的互联网电商平台解决方案之一，CRMEB基于 PHP + MySQL 的技术，采用ThinkPHP框架开发。
CRMEB官方网站：http://www.crmeb.com
CRMEB开源商城系统（以下简称“CRMEB”或“许可软件”或“本软件”），由西安众邦网络科技有限公司（以下称“众邦科技”）自主独创开发，CRMEB官方网站：http://www.crmeb.com，您在使用CRMEB客户管理+电商系统（以下称“许可软件”或“本软件”）之前，请您仔细阅读本协议，特别是法律适用和争议解决条款，您需要重点阅读。如您对协议有任何疑问，可咨询CRMEB官方客服。如果您安装或以其他任何方式使用本软件，则视为已经接受本协议。如果您不接受本协议的全部或部分条款，您将无权使用本软件，请立即终止安装、或以其他方式使用该软件，删除您已经安装或保留的该软件的任何组件。
<br/>
一、定义
软件（许可软件或本软件）：本协议中的“软件”是指CRMEB开源商城系统，由若干模块或功能组成的已经植入或即将植入众邦科技指定产品内的信息处理程序或支持文件，其中支持文件具体包括软件的源代码、目标码的全部或部分，还包括与本软件或众邦科技产品相关的所有描述其功能、特点、内容、质量、测试、用户手册、用户许可协议等纸质或电子版的资料、技术文档等。
您：本协议中的“您”是指安装、使用本软件的个人或法人实体，法人实体包括公司、企业、机构、组织或单位。
我们：本协议中的“我们”即是CRMEB官方，即指西安众邦网络科技有限公司及其关联公司。
二次开发：本协议中的“二次开发”是指在本软件上进行定制修改、功能扩展。
<br/>
二、软件许可使用内容
您在遵守本软件开源协议的相关约定前提下，通过我们指定合法渠道下载软件后，您需遵守的补充约定：
2.1 以自用为目的，您可将本软件用于盈利或非盈利项目上，且不受任何限制。
2.2 以自用为目的，在保留版权标识的前提下您可任意修改程序源码。
2.3 禁止以任何方式破坏CRMEB的商业授权机制（包括但不限于收集CRMEB源码后经营与CRMEB同类型、同性质服务等）。
2.4 禁止利用CRMEB发表、传送、传播、储存违反国家法律、危害国家安全、社会稳定、公序良俗的内容，或任何不当的、侮辱诽谤的、淫秽的、暴力的及任何违反国家法律法规政策的内容。
2.5 CRMEB著作权已在中华人民共和国国家版权局注册(中国国家版权局著作权登记号 2018SR024463)，著作权受到法律和国际公约保护。未经我们书面许可，不得删除网站底部及相应的官方链接。购买商业版授权请联系众邦科技客服，了解最新说明。
2.6 安装前请仔细阅读本软件帮助文档，查看本软件适用运营环境，在软件相关文档中已经明确提示，如因软件安装不符运营环境造成的故障，众邦科技不承担任何责任。
2.7 保留本软件原有的许可声明和版权、专利、商标情况等标识；
<br/>
三、CRMEB遵守的约定
3.1 CRMEB保证遵循中国的法律法规及相关政策规范。
3.2 除付费功能插件外，确保所有代码用户皆可阅读。
3.3 确保用户在完成所有系统部署后，在不依赖CRMEB支持下也可永久运行。
3.4 除商业版本付费授权相关功能插件外，禁止对源代码进行加密和混淆。
3.5 禁止不经用户许可的情况下以任何方式自动安装加密代码。
3.6 禁止不经用户许可的情况下以任何方式收集用户数据。
3.7 确保本软件无后门。
3.8 CRMEB不提供与任何开源软件有关的或软件中可能使用的、集成的或与共同提供的第三方技术有关的任何保证。
<br/>
四、权利保留
4.1、众邦科技依法保留未在本协议中明确授予给您的其他一切在法律上属于众邦科技的权利。
4.2、本软件受著作权法、国际著作权条约和其他的知识产权法律或国际条约保护。根据本协议，在此仅许可您非独占性的、非排他性的一般许可使用该软件的权利，而不是出售或转让。
4.3、商标权：本协议不授予您众邦科技或其供应商的任何商标或服务标志相关的任何权利。
4.4、本软件所涉及到的一切知识产权，包括但不限于专利权、著作权、商标权、商业秘密、技术秘密，均属于各自内容拥有者的财产，众邦科技保留从其所拥有的知识产权获取利益的权利。
4.5、您一旦开始确认本协议并安装本软件，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权立即终止授权，责令停止损害，并保留追究相关责任的权力。
<br/>
五、知识产权
5.1、我们拥有许可软件的著作权、商业秘密以及其他相关的知识产权，包括与许可软件有关的各种文档资料。许可软件的相关标识属于我们及我们的关联公司的知识产权，并受到相关法律法规的保护。
5.2、在未获得我们明确同意前，您不得修改或删除应用产品中体现我们及其关联公司的任何标识、图标或身份信息。
5.3、除非在此明确地许可或授予，本协议并不涉及任何技术转让，软件里所包含和涉及所有权利，产权和利益属于我们独自所有。除非在此明确地许可，本合同并不将任何技术转让给您。
5.4、CRMEB欢迎并感谢您在保留CRMEB版权信息的前期下，将本软件原始系统发布在您的个人网站、企业官网或者其他的第三方网站。
<br/>
六、升级版本
6.1、我们会根据需要在后续进行一系列免费升级操作，您只有在获得商业使用授权许可后，才享有软件免费升级权益。我们有权决定将升级包何时以何种方式发送给您。
6.2、升级版本的许可：如果该软件经众邦科技同意升级，除非升级版本有替代的软件许可协议，否则升级版本仍应遵循本协议条款。
6.3、不论软件是否升级，您必须遵守本协议。
<br/>
七、无担保和责任限制
7.1 除众邦科技明确明示保证的事项以外，对其他任何默示、特定用途、适销性不做任何默示或明示的保证，由此引起的风险由您自己承担。
7.2 有关本软件在使用过程中存在不适用性情况，您应当立即以书面方式反馈给我们，在我们现有技术可以解决的情况下，将依照众邦科技的软件产品标准保修政策规定。
1)众邦科技不对试用期及免费试用软件因使用而产生的损失承担任何明示或暗示的责任。
2)众邦科技承担的所有责任以您购买该软件所支付的价款为限。
7.3 对因意外事故、滥用、错误使用、擅自修改所引起的软件使用问题，我们不承担任何责任，也不做任何保证。对因软件产品存在被攻击，或者自然灾害等不可抗力因素或非众邦科技原因导致软件不能使用，或造成损失的，我们不承担任何责任，也不做任何保证。
7.4 对因使用软件引起的其他任何附带的、间接的或惩罚性的损失，包括但不限于商业利润的损失、信息或数据的丢失，众邦科技不承担任何责任，即使众邦科技已被告知存在此种损害的可能性也不例外。
7.5 除法律法规有明确规定外，我们将尽最大努力确保许可软件及其所涉及的技术及信息安全、有效、准确、可靠，但受限于我们现有技术，您充分理解我们不能对此进行担保。您理解，对于因您自身、不可抗力及第三方原因导致的您的直接或间接损失，我们无法承担责任。
7.6 由于您因下述任一情况所引起或与此有关的人身伤害或附带的、间接的损害赔偿，包括但不限于利润损失、资料损失、业务中断的损害赔偿或其他商业损害赔偿或损失，需由您自行承担：使用或未能使用许可软件；第三方未经批准的使用许可软件或更改您的数据；使用许可软件进行的行为产生的费用及损失；您对许可软件的误解；非因我们的原因而引起的与许可软件有关的其他损失。
7.7 您清楚互联网软件的特殊性，本软件与大多数互联网软件一样，受包括但不限于用户原因、网络服务质量、社会环境等因素的影响，可能受到各种安全问题的侵扰，如用户下载安装的其他软件或访问的其他网站中含有“木马”等病毒，威胁到用户的计算机信息和数据的安全，继而影响本软件的正常使用等，用户应加强信息安全及使用资料的保护，以免遭受损失。
<br/>
八、保密条款
双方都应为可能获知另一方的商业计划、客户方资料、技术、产品、代码、文档和其他作为该方商业秘密的秘密信息予以保密。秘密信息包括所有有形的或无形的、标明为秘密的信息。秘密信息归披露方所有，除非经披露方声明许可否则不得披露或使用。
<br/>
九、协议终止和违约责任
9.1、如果您没有遵守本协议的部分或全部条款，众邦科技可以随时单方终止本协议。协议终止后，您必须立即停止使用该软件，对已经安装的软件进行卸载，如果由于您违反了本协议的规定给众邦科技造成损失，应承担损失赔偿责任。
9.2、您应理解按授权范围使用许可软件、尊重软件及软件包含内容的知识产权、按规范使用软件、按本协议约定履行义务是您获取我们授权使用软件的前提，如您违反本协议，我们有权终止使用许可。
9.3、您对软件的使用有赖于我们及关联公司为您提供的配套服务，您违反与我们或我们关联公司的条款、协议、规则、通告等相关规定，我们有权终止使用许可。您违反了本协议的规定给众邦科技造成损失，应承担给我们造成损失的赔偿责任。
9.4、您理解出于维护软件系统及软件平台秩序的目的，如果您向我们及（或）我们的关联公司作出任何形式的承诺，且相关公司已确认您违反了该承诺并通知我们依据您与其相关约定进行处理的，则我们可按您的承诺或协议约定的方式对您的使用许可及其他我们可控制的权益采取限制措施，包括中止或终止对您的使用许可，并追究您相关法律责任的权利。
9.5、您如从获得我们授权认可的第三方取得许可软件，您需要遵守本协议及第三方对您使用许可软件方式与限制的约定，如果您违反本协议及与第三方约定，我们有权终止对您的使用许可，并追究您相关法律责任。
9.6、您应对从本软件获得的代码、文档等技术信息保密，不得对源代码、文档及框架进行删改，不得破译加密部分，不得非法进行倒卖本软件，我们不对非法软件使用后果承担任何责任，并有权追究您的法律责任，您应当赔偿因您的侵权行为给我们造成的直接和间接损失。
9.7、如您违反本协议规定的条款，则构成违约，必须立即停止使用本软件，如给我们或其他用户造成损失的，您必须承担全部的赔偿责任（包括直接损失和间接损失），包括但不限于咨询费、诉讼费、执行费、保全费、保险费、律师费等费用。
<br/>
十、管辖法律及可分割性
10.1、本协议之效力、解释、变更、执行与争议解决均适用中华人民共和国法律，如无相关法律规定的，则应参照通用国际商业惯例和（或）行业惯例。本协议由您与我们于我们服务器所在地陕西省西安市莲湖区签署。因本协议产生或与本协议有关的争议，您可与我们以友好协商，协商不成时，提交西安仲裁委员会予以裁决。仲裁裁决是终局的，对双方均有拘束力。
10.2、本协议任何条款被认定为无效的，不应影响其他条款或其任何部分的效力，您与我们仍应善意履行。
<br/>
十一、其他
11.1、本协议未约定的，由双方另行商定。
11.2、本协议的所有标题仅是为了醒目及阅读方便，本身并没有实际涵义，不能作为解释本协议涵义的依据。（正文完）

西安众邦网络科技有限公司
协议发布时间： 2017年08月01日
版本最新更新： 2023年02月03日 By CRMEB

CRMEB官方网站：http://www.crmeb.com
CRMEB演示站：http://demo.crmeb.com
-----------------------------------------------------
运营团队: 众邦科技
电   话: 400-8888-794
邮   箱: admin@xazbkj.com
网   址: http://www.xazbkj.com

</pre>
        </div>
        <div class="bottom" @click="agree">我知道了</div>
    </div>
</div>
<?php require './templates/footer.php'; ?>

</body>
<script>
    new Vue({
        el: '#step1',
        data() {
            return {radio: 0, isShow: 0, isShock: false}
        },
        methods: {
            jump() {
                if (this.radio == 1) {
                    window.location.href = "./index.php?step=2";
                } else {
                    // this.$message({
                    //     message: '请先阅读并同意《软件使用协议》再进行下一步操作',
                    //     type: 'error'
                    // });
                    this.isShock = true
                    setTimeout(e => {
                        this.isShock = false
                    }, 500)
                }
            },
            agree() {
                this.isShow = 0
            }
        }
    })
</script>
</html>