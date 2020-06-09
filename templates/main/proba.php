<?php session_start(); define('HACK8SUN', TRUE);
if (isset($_GET['logout'])) { $_SESSION=array(); session_destroy(); echo "<script>location.href='./';</script>"; }
if (isset($_SESSION['HTTP_USER_AGENT'])) {
    if ($_SESSION['HTTP_USER_AGENT'] == md5($_SERVER['HTTP_USER_AGENT'])) {
        include 'modules/config.php';
    }
} else {
    $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
    echo "<script>location.href=location.href;</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Фабрика Решений</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="plugins/datepicker/datepicker3.min.css"><!-- Date Picker -->
    <!--<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.min.css"> Daterange picker -->
    <link rel="stylesheet" href="dist/css/table/dt.css"><!-- DataTable style -->
    <link rel="stylesheet" href="dist/select2/select2.min.css">
    <link rel="stylesheet" href="dist/css/style.css"><!-- Theme style -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- BOOTBOX --><script src="dist/js/bootbox1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="dist/js/table/dt.js"></script>
    
</head>
<body class="hold-transition skin-blue sidebar-mini bb-js">
<?php //delaem soobscheniya - prosmotrennymi
    if (isset($_GET['viewMess'])) { mysql_query ("UPDATE occms_messpriv set prosmotr='1' where id_ostavil='".dd($_GET['viewMess'])."' and id_komu='".$_SESSION['user_id']."'"); }
?>

<div class="wrapper">
    <header class="main-header"><!-- Logo -->
        <a href="./" class="logo snd"><span class="logo-mini"><b>Ф</b> Р</span><span class="logo-lg"><b>Фабрика</b> Решений</span></a>
        <?php include 'modules/menu_top.php'; ?>
    </header>
    
    <?php include 'modules/menu_left.php'; ?>
    
    <div class="content-wrapper">
        <?php
            if (isset($_POST['go'])) { if ($_POST['go']=='Вход') include 'modules/autoriz/log.php'; }
            if (!$_GET) include 'modules/home.php';
            if (isset($_GET['login'])) include 'modules/autoriz/log_form.php';
            if (isset($_GET['reg'])) include 'modules/autoriz/reg.php';
            if (isset($_GET['registruser'])) include 'modules/autoriz/registeruser.php';
            if (isset($_GET['zabyl'])) include 'modules/autoriz/zabyl.php';
            if (isset($_GET['checkout'])) include 'modules/checkout.php';
            if (isset($_GET['exam'])) include 'modules/exam.php';
            if (isset($_GET['bill'])) include 'modules/bill.php';
            if (isset($_GET['mess'])) include 'modules/mess.php';
            if (isset($_GET['help'])) include 'modules/help.php';
            if (isset($_GET['coop'])) include 'modules/coop.php';
            if (isset($_GET['partner'])) include 'modules/partner.php';
            if (isset($_GET['profile'])) include 'modules/userinfo.php';
            if (isset($_GET['allNews'])) include 'modules/allnews.php';
            if (isset($_GET['stat'])) include 'modules/stat.php';
        ?>
    </div>  
    
    <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Версия</b> 0.0.1</div>
        &copy; <?php echo date('Y'); ?> <a href="#">Фабрика решений.</a> Все права защищены.
    </footer>
    <?php include 'modules/menu_right.php'; ?>
</div>
<!-- danger alert -->
<div class="message-box message-box-danger animated fadeIn" id="messbox-danger-chEmpty">
    <div class="mb-container animated8">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-warning"></span> Ошибка!</div>
            <div class="mb-content">
                <br><p id="mestoErr"><?php echo $errCh; ?></p><br>
            </div>
            <div class="mb-footer"><button class="btn btn-default btn-lg pull-right mb-control-close ionsound-pop-cork">Закрыть</button></div>
        </div>
    </div>
</div>

<!-- Scripts --------------------------------------------------------------- -->
<?php /*<script src="dist/js/jqui/jquery-ui.min.js"></script>*/ ?>
<script> 
$(document).ready(function(){
$('body').tooltip({selector:'[data-toggle="tooltip"],[data-toggle=collapse],button,span,.ttipp,.tti',container:'body',placement:'top',html:'true',trigger:'hover'});
});    
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.min.js"></script><!-- datepicker -->

<script type="text/javascript">
$(document).ready(function(){
    $.fn.datepicker.dates['ru']={days:["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"],
        daysShort:["Вск","Пнд","Втр","Срд","Чтв","Птн","Суб","Вск"], daysMin:["Вс","Пн","Вт","Ср","Чт","Пт","Сб","Вс"],
        months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],
        monthsShort:["Янв","Фев","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек"],today:"Сегодня",weekStart:1};
    var options={ startView:2, format:'yyyy-mm-dd',language:'ru',todayHighlight:'true',autoclose:'true'}; $('#datetimepicker1').datepicker(options);
    var options3={ startView:3, format:'yyyy-mm-dd',language:'ru',todayHighlight:'true',autoclose:'true'}; $('#datetimepicker3').datepicker(options3);
});

/* MESSAGE BOX */ $(".mb-control").on("click",function(){ var box = $($(this).data("box"));
if(box.length>0){ box.toggleClass("open"); var sound=box.data("sound"); if(sound==='alert') playAudio('alert'); if(sound==='fail') playAudio('fail'); } return false; });
$(".mb-control-close").on("click",function(){ $(this).parents(".message-box").removeClass("open"); return false; }); 
</script>

<script src="dist/select2/select2.min.js"></script>
<script>(function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;return e.define("select2/i18n/ru",[],function(){function e(e,t,n,r){return e%10<5&&e%10>0&&e%100<5||e%100>20?e%10>1?n:t:r}return{errorLoading:function(){return"Невозможно загрузить результаты"},inputTooLong:function(t){var n=t.input.length-t.maximum,r="Пожалуйста, введите на "+n+" символ";return r+=e(n,"","a","ов"),r+=" меньше",r},inputTooShort:function(t){var n=t.minimum-t.input.length,r="Пожалуйста, введите еще хотя бы "+n+" символ";return r+=e(n,"","a","ов"),r},loadingMore:function(){return"Загрузка данных…"},maximumSelected:function(t){var n="Вы можете выбрать не более "+t.maximum+" элемент";return n+=e(t.maximum,"","a","ов"),n},noResults:function(){return"Совпадений не найдено"},searching:function(){return"Поиск…"}}}),{define:e.define,require:e.require}})(); $(".select2").select2({language:"ru",theme:"classic"}); </script>

<?php if ($_SESSION['color']=="W9z8Sun1") { if ($sfd['sound']>="1") { ?>
    <script>$('.snd').click(function(){ ion.sound.play('snap'); }); $('.dropdown-toggle').on('click',function(){ ion.sound.play('water_droplet_2'); });</script>
    <script src="dist/js/ion.sound.min.js"></script><!-- BEGIN PLUGINS AREA -->
    <script> volSND=0.<?php echo $sfd['sound']; ?>; </script> 
    <script src="dist/js/soundplayer.js"></script><!-- PLUGINS INITIALIZATION AND SETTINGS -->
    <script>$(document).ready(function(){ SoundPlayer.init(); });</script> 
<?php } } ?>

<script src="dist/js/modaleffects.js"></script>
<script src="dist/js/app_my_old.js"></script>

<?php if ($_SESSION['color']=="W9z8Sun1") { ?>
<script>
    function proveritMess() {
        $.ajax({ type:"POST", url:"modules/check_mess.php", dataType:"text", async:true, data:"", 
            success: function(data){ $("#listMessTop").html(data);}, 
            error:function(err, err_txt){ console.log("ERROR RECIVE DATA: "+err_txt);} });
    };
    proveritMess(); setInterval(proveritMess,12000);
</script>
<?php } ?>

</body>
</html>