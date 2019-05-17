<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='msapplication-tap-highlight' content='no' />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Chrome, Firefox OS and Opera -->
  <meta name='theme-color' content='#49CEFF' />
  <!-- Windows Phone -->
  <meta name='msapplication-navbutton-color' content='#49CEFF' />
  <!-- iOS Safari -->
  <meta name='apple-mobile-web-app-capable' content='yes' />
  <meta name='apple-mobile-web-app-status-bar-style' content='black-translucent' />
  <title>Gestão Bytes </title>
  <link rel='stylesheet' href='{{url('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}' />
  <link rel='stylesheet' href='{{url('backend/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}' />
  <link rel='stylesheet' href='{{url('backend/bower_components/animate.css/animate.min.css')}}' />
  <link rel='stylesheet' href='{{url('backend/bower_components/metisMenu/dist/metisMenu.min.css')}}' />
  <link rel='stylesheet' href='{{url('backend/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}' />
  <link rel='stylesheet' href='{{url('backend/bower_components/Waves/dist/waves.min.css')}}' />
  <link rel='stylesheet' href='{{url('backend/bower_components/toastr/toastr.css')}}' />

  <link rel='stylesheet' href='{{url('backend/bower_components/datatables/media/css/jquery.dataTables.min.css')}}' />
  <link rel='stylesheet' href='{{url('backend/css/style.css')}}' />
  <link rel='stylesheet' href='{{url('sweetalert.css')}}' />

  @stack('css')
  @stack('js-topo')

  <script>
    window.gestaobytes = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
  </script>

  <!--[if lt IE 9]>
      <script src='{{url('backend/bower_components/html5shiv/dist/html5shiv.min.js')}}'></script>
      <script src='{{url('backend/bower_components/respondJs/dest/respond.min.js')}}'></script>
    <![endif]-->
</head>