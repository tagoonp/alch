<script type="text/javascript" src="./node_modules/jquery.mobile-1.4.5/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/custom/js/config.js" ></script>
<script>
    var current_session = null
    window.localStorage.removeItem(conf.prefix + 'session')
    $(document).ready(function(){
      window.location = './'
    })
</script>
