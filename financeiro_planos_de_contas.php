<?php

$planoNome = '';
$planoIcone = '';
$planoDescricao = '';

?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Financeiro Contas</title>

    <?php
      include "app-includes/head/vendors.css.php";
    ?>

    <!-- BEGIN: PAGE VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: PAGE VENDOR CSS-->

    <?php
      include "app-includes/head/theme.css.php";
    ?>

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/financeiro-contas-list.css">
    <!-- END: Page Level CSS-->

    <?php
      include "app-includes/head/custom.css.php";
    ?>

  </head>
  <!-- END: Head-->

  <body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns"
    data-open="click"
    data-menu="vertical-modern-menu"
    data-col="2-columns"
  >

    <?php
      include "app-includes/menus/header.php";
      include "app-includes/menus/aside-financeiro.php";
    ?>


    <!-- BEGIN: Page Main-->
    <div id="main">

      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-light-blue"></div>

        <!-- Title & Breadcrumbs -->
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Planos de Contas</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Planos de Contas
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

        <!-- Conteúdo -->
        <div class="col s12">
          <div class="container">

            <!-- Tabela de Dados -->
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <table id="page-length-option" class="data-table">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-center" style="width: 50px">Editar</th>
                            <th class="text-center" style="width: 50px">Remover</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>Infraestrutura</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="editModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Funcionários</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="editModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Professores</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="editModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Terceirizados</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="editModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Avulsos</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="editModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Remover</th>
                          </tr>
                        </tfoot>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Tabela de Dados -->

            <!-- Novo Plano de Conta -->
            <div id="plano-de-conta" class="modal" style="width: 600px; overflow:visible">
              <div class="modal-content">

                <form action="financeiro_planos_de_contas.php">
                  <div class="col s12">

                    <h5>Planos de Contas</h5>
                    <p>Preencha os dados para criar um novo plano de conta.</p>

                    <!-- Nome -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="planoNome" name="planoNome" value="<?=$planoNome;?>" type="text">
                        <label for="planoNome" class="active">Nome</label>
                      </div>
                    </div>
                    <!--/ Nome -->

                    <!-- Ícones -->
                    <div class="row">
                      <div class="input-field col s12">
                        <label for="planoIcone" class="active strong">Ícone</label>
                        <select name="filtroTipo" id="filtroTipo">
                          <option value="" selected>Selecione um Ícone</option>
                          <option value="3d_rotation">3d_rotation</option>
                          <option value="ac_unit">ac_unit</option>
                          <option value="access_alarm">access_alarm</option>
                          <option value="access_alarms">access_alarms</option>
                          <option value="access_time">access_time</option>
                          <option value="accessibility">accessibility</option>
                          <option value="accessible">accessible</option>
                          <option value="account_balance">account_balance</option>
                          <option value="account_balance_wallet">account_balance_wallet</option>
                          <option value="account_box">account_box</option>
                          <option value="account_circle">account_circle</option>
                          <option value="adb">adb</option>
                          <option value="add">add</option>
                          <option value="add_a_photo">add_a_photo</option>
                          <option value="add_alarm">add_alarm</option>
                          <option value="add_alert">add_alert</option>
                          <option value="add_box">add_box</option>
                          <option value="add_circle">add_circle</option>
                          <option value="add_circle_outline">add_circle_outline</option>
                          <option value="add_location">add_location</option>
                          <option value="add_shopping_cart">add_shopping_cart</option>
                          <option value="add_to_photos">add_to_photos</option>
                          <option value="add_to_queue">add_to_queue</option>
                          <option value="adjust">adjust</option>
                          <option value="airline_seat_flat">airline_seat_flat</option>
                          <option value="airline_seat_flat_angled">airline_seat_flat_angled</option>
                          <option value="airline_seat_individual_suite">airline_seat_individual_suite</option>
                          <option value="airline_seat_legroom_extra">airline_seat_legroom_extra</option>
                          <option value="airline_seat_legroom_normal">airline_seat_legroom_normal</option>
                          <option value="airline_seat_legroom_reduced">airline_seat_legroom_reduced</option>
                          <option value="airline_seat_recline_extra">airline_seat_recline_extra</option>
                          <option value="airline_seat_recline_normal">airline_seat_recline_normal</option>
                          <option value="airplanemode_active">airplanemode_active</option>
                          <option value="airplanemode_inactive">airplanemode_inactive</option>
                          <option value="airplay">airplay</option>
                          <option value="airport_shuttle">airport_shuttle</option>
                          <option value="alarm">alarm</option>
                          <option value="alarm_add">alarm_add</option>
                          <option value="alarm_off">alarm_off</option>
                          <option value="alarm_on">alarm_on</option>
                          <option value="album">album</option>
                          <option value="all_inclusive">all_inclusive</option>
                          <option value="all_out">all_out</option>
                          <option value="android">android</option>
                          <option value="announcement">announcement</option>
                          <option value="apps">apps</option>
                          <option value="archive">archive</option>
                          <option value="arrow_back">arrow_back</option>
                          <option value="arrow_downward">arrow_downward</option>
                          <option value="arrow_drop_down">arrow_drop_down</option>
                          <option value="arrow_drop_down_circle">arrow_drop_down_circle</option>
                          <option value="arrow_drop_up">arrow_drop_up</option>
                          <option value="arrow_forward">arrow_forward</option>
                          <option value="arrow_upward">arrow_upward</option>
                          <option value="art_track">art_track</option>
                          <option value="aspect_ratio">aspect_ratio</option>
                          <option value="assessment">assessment</option>
                          <option value="assignment">assignment</option>
                          <option value="assignment_ind">assignment_ind</option>
                          <option value="assignment_late">assignment_late</option>
                          <option value="assignment_return">assignment_return</option>
                          <option value="assignment_returned">assignment_returned</option>
                          <option value="assignment_turned_in">assignment_turned_in</option>
                          <option value="assistant">assistant</option>
                          <option value="assistant_photo">assistant_photo</option>
                          <option value="attach_file">attach_file</option>
                          <option value="attach_money">attach_money</option>
                          <option value="attachment">attachment</option>
                          <option value="audiotrack">audiotrack</option>
                          <option value="autorenew">autorenew</option>
                          <option value="av_timer">av_timer</option>
                          <option value="backspace">backspace</option>
                          <option value="backup">backup</option>
                          <option value="battery_alert">battery_alert</option>
                          <option value="battery_charging_full">battery_charging_full</option>
                          <option value="battery_full">battery_full</option>
                          <option value="battery_std">battery_std</option>
                          <option value="battery_unknown">battery_unknown</option>
                          <option value="beach_access">beach_access</option>
                          <option value="beenhere">beenhere</option>
                          <option value="block">block</option>
                          <option value="bluetooth">bluetooth</option>
                          <option value="bluetooth_audio">bluetooth_audio</option>
                          <option value="bluetooth_connected">bluetooth_connected</option>
                          <option value="bluetooth_disabled">bluetooth_disabled</option>
                          <option value="bluetooth_searching">bluetooth_searching</option>
                          <option value="blur_circular">blur_circular</option>
                          <option value="blur_linear">blur_linear</option>
                          <option value="blur_off">blur_off</option>
                          <option value="blur_on">blur_on</option>
                          <option value="book">book</option>
                          <option value="bookmark">bookmark</option>
                          <option value="bookmark_border">bookmark_border</option>
                          <option value="border_all">border_all</option>
                          <option value="border_bottom">border_bottom</option>
                          <option value="border_clear">border_clear</option>
                          <option value="border_color">border_color</option>
                          <option value="border_horizontal">border_horizontal</option>
                          <option value="border_inner">border_inner</option>
                          <option value="border_left">border_left</option>
                          <option value="border_outer">border_outer</option>
                          <option value="border_right">border_right</option>
                          <option value="border_style">border_style</option>
                          <option value="border_top">border_top</option>
                          <option value="border_vertical">border_vertical</option>
                          <option value="branding_watermark">branding_watermark</option>
                          <option value="brightness_1">brightness_1</option>
                          <option value="brightness_2">brightness_2</option>
                          <option value="brightness_3">brightness_3</option>
                          <option value="brightness_4">brightness_4</option>
                          <option value="brightness_5">brightness_5</option>
                          <option value="brightness_6">brightness_6</option>
                          <option value="brightness_7">brightness_7</option>
                          <option value="brightness_auto">brightness_auto</option>
                          <option value="brightness_high">brightness_high</option>
                          <option value="brightness_low">brightness_low</option>
                          <option value="brightness_medium">brightness_medium</option>
                          <option value="broken_image">broken_image</option>
                          <option value="brush">brush</option>
                          <option value="bubble_chart">bubble_chart</option>
                          <option value="bug_report">bug_report</option>
                          <option value="build">build</option>
                          <option value="burst_mode">burst_mode</option>
                          <option value="business">business</option>
                          <option value="business_center">business_center</option>
                          <option value="cached">cached</option>
                          <option value="cake">cake</option>
                          <option value="call">call</option>
                          <option value="call_end">call_end</option>
                          <option value="call_made">call_made</option>
                          <option value="call_merge">call_merge</option>
                          <option value="call_missed">call_missed</option>
                          <option value="call_missed_outgoing">call_missed_outgoing</option>
                          <option value="call_received">call_received</option>
                          <option value="call_split">call_split</option>
                          <option value="call_to_action">call_to_action</option>
                          <option value="camera">camera</option>
                          <option value="camera_alt">camera_alt</option>
                          <option value="camera_enhance">camera_enhance</option>
                          <option value="camera_front">camera_front</option>
                          <option value="camera_rear">camera_rear</option>
                          <option value="camera_roll">camera_roll</option>
                          <option value="cancel">cancel</option>
                          <option value="card_giftcard">card_giftcard</option>
                          <option value="card_membership">card_membership</option>
                          <option value="card_travel">card_travel</option>
                          <option value="casino">casino</option>
                          <option value="cast">cast</option>
                          <option value="cast_connected">cast_connected</option>
                          <option value="center_focus_strong">center_focus_strong</option>
                          <option value="center_focus_weak">center_focus_weak</option>
                          <option value="change_history">change_history</option>
                          <option value="chat">chat</option>
                          <option value="chat_bubble">chat_bubble</option>
                          <option value="chat_bubble_outline">chat_bubble_outline</option>
                          <option value="check">check</option>
                          <option value="check_box">check_box</option>
                          <option value="check_box_outline_blank">check_box_outline_blank</option>
                          <option value="check_circle">check_circle</option>
                          <option value="chevron_left">chevron_left</option>
                          <option value="chevron_right">chevron_right</option>
                          <option value="child_care">child_care</option>
                          <option value="child_friendly">child_friendly</option>
                          <option value="chrome_reader_mode">chrome_reader_mode</option>
                          <option value="class">class</option>
                          <option value="clear">clear</option>
                          <option value="clear_all">clear_all</option>
                          <option value="close">close</option>
                          <option value="closed_caption">closed_caption</option>
                          <option value="cloud">cloud</option>
                          <option value="cloud_circle">cloud_circle</option>
                          <option value="cloud_done">cloud_done</option>
                          <option value="cloud_download">cloud_download</option>
                          <option value="cloud_off">cloud_off</option>
                          <option value="cloud_queue">cloud_queue</option>
                          <option value="cloud_upload">cloud_upload</option>
                          <option value="code">code</option>
                          <option value="collections">collections</option>
                          <option value="collections_bookmark">collections_bookmark</option>
                          <option value="color_lens">color_lens</option>
                          <option value="colorize">colorize</option>
                          <option value="comment">comment</option>
                          <option value="compare">compare</option>
                          <option value="compare_arrows">compare_arrows</option>
                          <option value="computer">computer</option>
                          <option value="confirmation_number">confirmation_number</option>
                          <option value="contact_mail">contact_mail</option>
                          <option value="contact_phone">contact_phone</option>
                          <option value="contacts">contacts</option>
                          <option value="content_copy">content_copy</option>
                          <option value="content_cut">content_cut</option>
                          <option value="content_paste">content_paste</option>
                          <option value="control_point">control_point</option>
                          <option value="control_point_duplicate">control_point_duplicate</option>
                          <option value="copyright">copyright</option>
                          <option value="create">create</option>
                          <option value="create_new_folder">create_new_folder</option>
                          <option value="credit_card">credit_card</option>
                          <option value="crop">crop</option>
                          <option value="crop_16_9">crop_16_9</option>
                          <option value="crop_3_2">crop_3_2</option>
                          <option value="crop_5_4">crop_5_4</option>
                          <option value="crop_7_5">crop_7_5</option>
                          <option value="crop_din">crop_din</option>
                          <option value="crop_free">crop_free</option>
                          <option value="crop_landscape">crop_landscape</option>
                          <option value="crop_original">crop_original</option>
                          <option value="crop_portrait">crop_portrait</option>
                          <option value="crop_rotate">crop_rotate</option>
                          <option value="crop_square">crop_square</option>
                          <option value="dashboard">dashboard</option>
                          <option value="data_usage">data_usage</option>
                          <option value="date_range">date_range</option>
                          <option value="dehaze">dehaze</option>
                          <option value="delete">delete</option>
                          <option value="delete_forever">delete_forever</option>
                          <option value="delete_sweep">delete_sweep</option>
                          <option value="description">description</option>
                          <option value="desktop_mac">desktop_mac</option>
                          <option value="desktop_windows">desktop_windows</option>
                          <option value="details">details</option>
                          <option value="developer_board">developer_board</option>
                          <option value="developer_mode">developer_mode</option>
                          <option value="device_hub">device_hub</option>
                          <option value="devices">devices</option>
                          <option value="devices_other">devices_other</option>
                          <option value="dialer_sip">dialer_sip</option>
                          <option value="dialpad">dialpad</option>
                          <option value="directions">directions</option>
                          <option value="directions_bike">directions_bike</option>
                          <option value="directions_boat">directions_boat</option>
                          <option value="directions_bus">directions_bus</option>
                          <option value="directions_car">directions_car</option>
                          <option value="directions_railway">directions_railway</option>
                          <option value="directions_run">directions_run</option>
                          <option value="directions_subway">directions_subway</option>
                          <option value="directions_transit">directions_transit</option>
                          <option value="directions_walk">directions_walk</option>
                          <option value="disc_full">disc_full</option>
                          <option value="dns">dns</option>
                          <option value="do_not_disturb">do_not_disturb</option>
                          <option value="do_not_disturb_alt">do_not_disturb_alt</option>
                          <option value="do_not_disturb_off">do_not_disturb_off</option>
                          <option value="do_not_disturb_on">do_not_disturb_on</option>
                          <option value="dock">dock</option>
                          <option value="domain">domain</option>
                          <option value="done">done</option>
                          <option value="done_all">done_all</option>
                          <option value="donut_large">donut_large</option>
                          <option value="donut_small">donut_small</option>
                          <option value="drafts">drafts</option>
                          <option value="drag_handle">drag_handle</option>
                          <option value="drive_eta">drive_eta</option>
                          <option value="dvr">dvr</option>
                          <option value="edit">edit</option>
                          <option value="edit_location">edit_location</option>
                          <option value="eject">eject</option>
                          <option value="email">email</option>
                          <option value="enhanced_encryption">enhanced_encryption</option>
                          <option value="equalizer">equalizer</option>
                          <option value="error">error</option>
                          <option value="error_outline">error_outline</option>
                          <option value="euro_symbol">euro_symbol</option>
                          <option value="ev_station">ev_station</option>
                          <option value="event">event</option>
                          <option value="event_available">event_available</option>
                          <option value="event_busy">event_busy</option>
                          <option value="event_note">event_note</option>
                          <option value="event_seat">event_seat</option>
                          <option value="exit_to_app">exit_to_app</option>
                          <option value="expand_less">expand_less</option>
                          <option value="expand_more">expand_more</option>
                          <option value="explicit">explicit</option>
                          <option value="explore">explore</option>
                          <option value="exposure">exposure</option>
                          <option value="exposure_neg_1">exposure_neg_1</option>
                          <option value="exposure_neg_2">exposure_neg_2</option>
                          <option value="exposure_plus_1">exposure_plus_1</option>
                          <option value="exposure_plus_2">exposure_plus_2</option>
                          <option value="exposure_zero">exposure_zero</option>
                          <option value="extension">extension</option>
                          <option value="face">face</option>
                          <option value="fast_forward">fast_forward</option>
                          <option value="fast_rewind">fast_rewind</option>
                          <option value="favorite">favorite</option>
                          <option value="favorite_border">favorite_border</option>
                          <option value="featured_play_list">featured_play_list</option>
                          <option value="featured_video">featured_video</option>
                          <option value="feedback">feedback</option>
                          <option value="fiber_dvr">fiber_dvr</option>
                          <option value="fiber_manual_record">fiber_manual_record</option>
                          <option value="fiber_new">fiber_new</option>
                          <option value="fiber_pin">fiber_pin</option>
                          <option value="fiber_smart_record">fiber_smart_record</option>
                          <option value="file_download">file_download</option>
                          <option value="file_upload">file_upload</option>
                          <option value="filter">filter</option>
                          <option value="filter_1">filter_1</option>
                          <option value="filter_2">filter_2</option>
                          <option value="filter_3">filter_3</option>
                          <option value="filter_4">filter_4</option>
                          <option value="filter_5">filter_5</option>
                          <option value="filter_6">filter_6</option>
                          <option value="filter_7">filter_7</option>
                          <option value="filter_8">filter_8</option>
                          <option value="filter_9">filter_9</option>
                          <option value="filter_9_plus">filter_9_plus</option>
                          <option value="filter_b_and_w">filter_b_and_w</option>
                          <option value="filter_center_focus">filter_center_focus</option>
                          <option value="filter_drama">filter_drama</option>
                          <option value="filter_frames">filter_frames</option>
                          <option value="filter_hdr">filter_hdr</option>
                          <option value="filter_list">filter_list</option>
                          <option value="filter_none">filter_none</option>
                          <option value="filter_tilt_shift">filter_tilt_shift</option>
                          <option value="filter_vintage">filter_vintage</option>
                          <option value="find_in_page">find_in_page</option>
                          <option value="find_replace">find_replace</option>
                          <option value="fingerprint">fingerprint</option>
                          <option value="first_page">first_page</option>
                          <option value="fitness_center">fitness_center</option>
                          <option value="flag">flag</option>
                          <option value="flare">flare</option>
                          <option value="flash_auto">flash_auto</option>
                          <option value="flash_off">flash_off</option>
                          <option value="flash_on">flash_on</option>
                          <option value="flight">flight</option>
                          <option value="flight_land">flight_land</option>
                          <option value="flight_takeoff">flight_takeoff</option>
                          <option value="flip">flip</option>
                          <option value="flip_to_back">flip_to_back</option>
                          <option value="flip_to_front">flip_to_front</option>
                          <option value="folder">folder</option>
                          <option value="folder_open">folder_open</option>
                          <option value="folder_shared">folder_shared</option>
                          <option value="folder_special">folder_special</option>
                          <option value="font_download">font_download</option>
                          <option value="format_align_center">format_align_center</option>
                          <option value="format_align_justify">format_align_justify</option>
                          <option value="format_align_left">format_align_left</option>
                          <option value="format_align_right">format_align_right</option>
                          <option value="format_bold">format_bold</option>
                          <option value="format_clear">format_clear</option>
                          <option value="format_color_fill">format_color_fill</option>
                          <option value="format_color_reset">format_color_reset</option>
                          <option value="format_color_text">format_color_text</option>
                          <option value="format_indent_decrease">format_indent_decrease</option>
                          <option value="format_indent_increase">format_indent_increase</option>
                          <option value="format_italic">format_italic</option>
                          <option value="format_line_spacing">format_line_spacing</option>
                          <option value="format_list_bulleted">format_list_bulleted</option>
                          <option value="format_list_numbered">format_list_numbered</option>
                          <option value="format_paint">format_paint</option>
                          <option value="format_quote">format_quote</option>
                          <option value="format_shapes">format_shapes</option>
                          <option value="format_size">format_size</option>
                          <option value="format_strikethrough">format_strikethrough</option>
                          <option value="format_textdirection_l_to_r">format_textdirection_l_to_r</option>
                          <option value="format_textdirection_r_to_l">format_textdirection_r_to_l</option>
                          <option value="format_underlined">format_underlined</option>
                          <option value="forum">forum</option>
                          <option value="forward">forward</option>
                          <option value="forward_10">forward_10</option>
                          <option value="forward_30">forward_30</option>
                          <option value="forward_5">forward_5</option>
                          <option value="free_breakfast">free_breakfast</option>
                          <option value="fullscreen">fullscreen</option>
                          <option value="fullscreen_exit">fullscreen_exit</option>
                          <option value="functions">functions</option>
                          <option value="g_translate">g_translate</option>
                          <option value="gamepad">gamepad</option>
                          <option value="games">games</option>
                          <option value="gavel">gavel</option>
                          <option value="gesture">gesture</option>
                          <option value="get_app">get_app</option>
                          <option value="gif">gif</option>
                          <option value="golf_course">golf_course</option>
                          <option value="gps_fixed">gps_fixed</option>
                          <option value="gps_not_fixed">gps_not_fixed</option>
                          <option value="gps_off">gps_off</option>
                          <option value="grade">grade</option>
                          <option value="gradient">gradient</option>
                          <option value="grain">grain</option>
                          <option value="graphic_eq">graphic_eq</option>
                          <option value="grid_off">grid_off</option>
                          <option value="grid_on">grid_on</option>
                          <option value="group">group</option>
                          <option value="group_add">group_add</option>
                          <option value="group_work">group_work</option>
                          <option value="hd">hd</option>
                          <option value="hdr_off">hdr_off</option>
                          <option value="hdr_on">hdr_on</option>
                          <option value="hdr_strong">hdr_strong</option>
                          <option value="hdr_weak">hdr_weak</option>
                          <option value="headset">headset</option>
                          <option value="headset_mic">headset_mic</option>
                          <option value="healing">healing</option>
                          <option value="hearing">hearing</option>
                          <option value="help">help</option>
                          <option value="help_outline">help_outline</option>
                          <option value="high_quality">high_quality</option>
                          <option value="highlight">highlight</option>
                          <option value="highlight_off">highlight_off</option>
                          <option value="history">history</option>
                          <option value="home">home</option>
                          <option value="hot_tub">hot_tub</option>
                          <option value="hotel">hotel</option>
                          <option value="hourglass_empty">hourglass_empty</option>
                          <option value="hourglass_full">hourglass_full</option>
                          <option value="http">http</option>
                          <option value="https">https</option>
                          <option value="image">image</option>
                          <option value="image_aspect_ratio">image_aspect_ratio</option>
                          <option value="import_contacts">import_contacts</option>
                          <option value="import_export">import_export</option>
                          <option value="important_devices">important_devices</option>
                          <option value="inbox">inbox</option>
                          <option value="indeterminate_check_box">indeterminate_check_box</option>
                          <option value="info">info</option>
                          <option value="info_outline">info_outline</option>
                          <option value="input">input</option>
                          <option value="insert_chart">insert_chart</option>
                          <option value="insert_comment">insert_comment</option>
                          <option value="insert_drive_file">insert_drive_file</option>
                          <option value="insert_emoticon">insert_emoticon</option>
                          <option value="insert_invitation">insert_invitation</option>
                          <option value="insert_link">insert_link</option>
                          <option value="insert_photo">insert_photo</option>
                          <option value="invert_colors">invert_colors</option>
                          <option value="invert_colors_off">invert_colors_off</option>
                          <option value="iso">iso</option>
                          <option value="keyboard">keyboard</option>
                          <option value="keyboard_arrow_down">keyboard_arrow_down</option>
                          <option value="keyboard_arrow_left">keyboard_arrow_left</option>
                          <option value="keyboard_arrow_right">keyboard_arrow_right</option>
                          <option value="keyboard_arrow_up">keyboard_arrow_up</option>
                          <option value="keyboard_backspace">keyboard_backspace</option>
                          <option value="keyboard_capslock">keyboard_capslock</option>
                          <option value="keyboard_hide">keyboard_hide</option>
                          <option value="keyboard_return">keyboard_return</option>
                          <option value="keyboard_tab">keyboard_tab</option>
                          <option value="keyboard_voice">keyboard_voice</option>
                          <option value="kitchen">kitchen</option>
                          <option value="label">label</option>
                          <option value="label_outline">label_outline</option>
                          <option value="landscape">landscape</option>
                          <option value="language">language</option>
                          <option value="laptop">laptop</option>
                          <option value="laptop_chromebook">laptop_chromebook</option>
                          <option value="laptop_mac">laptop_mac</option>
                          <option value="laptop_windows">laptop_windows</option>
                          <option value="last_page">last_page</option>
                          <option value="launch">launch</option>
                          <option value="layers">layers</option>
                          <option value="layers_clear">layers_clear</option>
                          <option value="leak_add">leak_add</option>
                          <option value="leak_remove">leak_remove</option>
                          <option value="lens">lens</option>
                          <option value="library_add">library_add</option>
                          <option value="library_books">library_books</option>
                          <option value="library_music">library_music</option>
                          <option value="lightbulb_outline">lightbulb_outline</option>
                          <option value="line_style">line_style</option>
                          <option value="line_weight">line_weight</option>
                          <option value="linear_scale">linear_scale</option>
                          <option value="link">link</option>
                          <option value="linked_camera">linked_camera</option>
                          <option value="list">list</option>
                          <option value="live_help">live_help</option>
                          <option value="live_tv">live_tv</option>
                          <option value="local_activity">local_activity</option>
                          <option value="local_airport">local_airport</option>
                          <option value="local_atm">local_atm</option>
                          <option value="local_bar">local_bar</option>
                          <option value="local_cafe">local_cafe</option>
                          <option value="local_car_wash">local_car_wash</option>
                          <option value="local_convenience_store">local_convenience_store</option>
                          <option value="local_dining">local_dining</option>
                          <option value="local_drink">local_drink</option>
                          <option value="local_florist">local_florist</option>
                          <option value="local_gas_station">local_gas_station</option>
                          <option value="local_grocery_store">local_grocery_store</option>
                          <option value="local_hospital">local_hospital</option>
                          <option value="local_hotel">local_hotel</option>
                          <option value="local_laundry_service">local_laundry_service</option>
                          <option value="local_library">local_library</option>
                          <option value="local_mall">local_mall</option>
                          <option value="local_movies">local_movies</option>
                          <option value="local_offer">local_offer</option>
                          <option value="local_parking">local_parking</option>
                          <option value="local_pharmacy">local_pharmacy</option>
                          <option value="local_phone">local_phone</option>
                          <option value="local_pizza">local_pizza</option>
                          <option value="local_play">local_play</option>
                          <option value="local_post_office">local_post_office</option>
                          <option value="local_printshop">local_printshop</option>
                          <option value="local_see">local_see</option>
                          <option value="local_shipping">local_shipping</option>
                          <option value="local_taxi">local_taxi</option>
                          <option value="location_city">location_city</option>
                          <option value="location_disabled">location_disabled</option>
                          <option value="location_off">location_off</option>
                          <option value="location_on">location_on</option>
                          <option value="location_searching">location_searching</option>
                          <option value="lock">lock</option>
                          <option value="lock_open">lock_open</option>
                          <option value="lock_outline">lock_outline</option>
                          <option value="looks">looks</option>
                          <option value="looks_3">looks_3</option>
                          <option value="looks_4">looks_4</option>
                          <option value="looks_5">looks_5</option>
                          <option value="looks_6">looks_6</option>
                          <option value="looks_one">looks_one</option>
                          <option value="looks_two">looks_two</option>
                          <option value="loop">loop</option>
                          <option value="loupe">loupe</option>
                          <option value="low_priority">low_priority</option>
                          <option value="loyalty">loyalty</option>
                          <option value="mail">mail</option>
                          <option value="mail_outline">mail_outline</option>
                          <option value="map">map</option>
                          <option value="markunread">markunread</option>
                          <option value="markunread_mailbox">markunread_mailbox</option>
                          <option value="memory">memory</option>
                          <option value="menu">menu</option>
                          <option value="merge_type">merge_type</option>
                          <option value="message">message</option>
                          <option value="mic">mic</option>
                          <option value="mic_none">mic_none</option>
                          <option value="mic_off">mic_off</option>
                          <option value="mms">mms</option>
                          <option value="mode_comment">mode_comment</option>
                          <option value="mode_edit">mode_edit</option>
                          <option value="monetization_on">monetization_on</option>
                          <option value="money_off">money_off</option>
                          <option value="monochrome_photos">monochrome_photos</option>
                          <option value="mood">mood</option>
                          <option value="mood_bad">mood_bad</option>
                          <option value="more">more</option>
                          <option value="more_horiz">more_horiz</option>
                          <option value="more_vert">more_vert</option>
                          <option value="motorcycle">motorcycle</option>
                          <option value="mouse">mouse</option>
                          <option value="move_to_inbox">move_to_inbox</option>
                          <option value="movie">movie</option>
                          <option value="movie_creation">movie_creation</option>
                          <option value="movie_filter">movie_filter</option>
                          <option value="multiline_chart">multiline_chart</option>
                          <option value="music_note">music_note</option>
                          <option value="music_video">music_video</option>
                          <option value="my_location">my_location</option>
                          <option value="nature">nature</option>
                          <option value="nature_people">nature_people</option>
                          <option value="navigate_before">navigate_before</option>
                          <option value="navigate_next">navigate_next</option>
                          <option value="navigation">navigation</option>
                          <option value="near_me">near_me</option>
                          <option value="network_cell">network_cell</option>
                          <option value="network_check">network_check</option>
                          <option value="network_locked">network_locked</option>
                          <option value="network_wifi">network_wifi</option>
                          <option value="new_releases">new_releases</option>
                          <option value="next_week">next_week</option>
                          <option value="nfc">nfc</option>
                          <option value="no_encryption">no_encryption</option>
                          <option value="no_sim">no_sim</option>
                          <option value="not_interested">not_interested</option>
                          <option value="note">note</option>
                          <option value="note_add">note_add</option>
                          <option value="notifications">notifications</option>
                          <option value="notifications_active">notifications_active</option>
                          <option value="notifications_none">notifications_none</option>
                          <option value="notifications_off">notifications_off</option>
                          <option value="notifications_paused">notifications_paused</option>
                          <option value="offline_pin">offline_pin</option>
                          <option value="ondemand_video">ondemand_video</option>
                          <option value="opacity">opacity</option>
                          <option value="open_in_browser">open_in_browser</option>
                          <option value="open_in_new">open_in_new</option>
                          <option value="open_with">open_with</option>
                          <option value="pages">pages</option>
                          <option value="pageview">pageview</option>
                          <option value="palette">palette</option>
                          <option value="pan_tool">pan_tool</option>
                          <option value="panorama">panorama</option>
                          <option value="panorama_fish_eye">panorama_fish_eye</option>
                          <option value="panorama_horizontal">panorama_horizontal</option>
                          <option value="panorama_vertical">panorama_vertical</option>
                          <option value="panorama_wide_angle">panorama_wide_angle</option>
                          <option value="party_mode">party_mode</option>
                          <option value="pause">pause</option>
                          <option value="pause_circle_filled">pause_circle_filled</option>
                          <option value="pause_circle_outline">pause_circle_outline</option>
                          <option value="payment">payment</option>
                          <option value="people">people</option>
                          <option value="people_outline">people_outline</option>
                          <option value="perm_camera_mic">perm_camera_mic</option>
                          <option value="perm_contact_calendar">perm_contact_calendar</option>
                          <option value="perm_data_setting">perm_data_setting</option>
                          <option value="perm_device_information">perm_device_information</option>
                          <option value="perm_identity">perm_identity</option>
                          <option value="perm_media">perm_media</option>
                          <option value="perm_phone_msg">perm_phone_msg</option>
                          <option value="perm_scan_wifi">perm_scan_wifi</option>
                          <option value="person">person</option>
                          <option value="person_add">person_add</option>
                          <option value="person_outline">person_outline</option>
                          <option value="person_pin">person_pin</option>
                          <option value="person_pin_circle">person_pin_circle</option>
                          <option value="personal_video">personal_video</option>
                          <option value="pets">pets</option>
                          <option value="phone">phone</option>
                          <option value="phone_android">phone_android</option>
                          <option value="phone_bluetooth_speaker">phone_bluetooth_speaker</option>
                          <option value="phone_forwarded">phone_forwarded</option>
                          <option value="phone_in_talk">phone_in_talk</option>
                          <option value="phone_iphone">phone_iphone</option>
                          <option value="phone_locked">phone_locked</option>
                          <option value="phone_missed">phone_missed</option>
                          <option value="phone_paused">phone_paused</option>
                          <option value="phonelink">phonelink</option>
                          <option value="phonelink_erase">phonelink_erase</option>
                          <option value="phonelink_lock">phonelink_lock</option>
                          <option value="phonelink_off">phonelink_off</option>
                          <option value="phonelink_ring">phonelink_ring</option>
                          <option value="phonelink_setup">phonelink_setup</option>
                          <option value="photo">photo</option>
                          <option value="photo_album">photo_album</option>
                          <option value="photo_camera">photo_camera</option>
                          <option value="photo_filter">photo_filter</option>
                          <option value="photo_library">photo_library</option>
                          <option value="photo_size_select_actual">photo_size_select_actual</option>
                          <option value="photo_size_select_large">photo_size_select_large</option>
                          <option value="photo_size_select_small">photo_size_select_small</option>
                          <option value="picture_as_pdf">picture_as_pdf</option>
                          <option value="picture_in_picture">picture_in_picture</option>
                          <option value="picture_in_picture_alt">picture_in_picture_alt</option>
                          <option value="pie_chart">pie_chart</option>
                          <option value="pie_chart_outlined">pie_chart_outlined</option>
                          <option value="pin_drop">pin_drop</option>
                          <option value="place">place</option>
                          <option value="play_arrow">play_arrow</option>
                          <option value="play_circle_filled">play_circle_filled</option>
                          <option value="play_circle_outline">play_circle_outline</option>
                          <option value="play_for_work">play_for_work</option>
                          <option value="playlist_add">playlist_add</option>
                          <option value="playlist_add_check">playlist_add_check</option>
                          <option value="playlist_play">playlist_play</option>
                          <option value="plus_one">plus_one</option>
                          <option value="poll">poll</option>
                          <option value="polymer">polymer</option>
                          <option value="pool">pool</option>
                          <option value="portable_wifi_off">portable_wifi_off</option>
                          <option value="portrait">portrait</option>
                          <option value="power">power</option>
                          <option value="power_input">power_input</option>
                          <option value="power_settings_new">power_settings_new</option>
                          <option value="pregnant_woman">pregnant_woman</option>
                          <option value="present_to_all">present_to_all</option>
                          <option value="print">print</option>
                          <option value="priority_high">priority_high</option>
                          <option value="public">public</option>
                          <option value="publish">publish</option>
                          <option value="query_builder">query_builder</option>
                          <option value="question_answer">question_answer</option>
                          <option value="queue">queue</option>
                          <option value="queue_music">queue_music</option>
                          <option value="queue_play_next">queue_play_next</option>
                          <option value="radio">radio</option>
                          <option value="radio_button_checked">radio_button_checked</option>
                          <option value="radio_button_unchecked">radio_button_unchecked</option>
                          <option value="rate_review">rate_review</option>
                          <option value="receipt">receipt</option>
                          <option value="recent_actors">recent_actors</option>
                          <option value="record_voice_over">record_voice_over</option>
                          <option value="redeem">redeem</option>
                          <option value="redo">redo</option>
                          <option value="refresh">refresh</option>
                          <option value="remove">remove</option>
                          <option value="remove_circle">remove_circle</option>
                          <option value="remove_circle_outline">remove_circle_outline</option>
                          <option value="remove_from_queue">remove_from_queue</option>
                          <option value="remove_red_eye">remove_red_eye</option>
                          <option value="remove_shopping_cart">remove_shopping_cart</option>
                          <option value="reorder">reorder</option>
                          <option value="repeat">repeat</option>
                          <option value="repeat_one">repeat_one</option>
                          <option value="replay">replay</option>
                          <option value="replay_10">replay_10</option>
                          <option value="replay_30">replay_30</option>
                          <option value="replay_5">replay_5</option>
                          <option value="reply">reply</option>
                          <option value="reply_all">reply_all</option>
                          <option value="report">report</option>
                          <option value="report_problem">report_problem</option>
                          <option value="restaurant">restaurant</option>
                          <option value="restaurant_menu">restaurant_menu</option>
                          <option value="restore">restore</option>
                          <option value="restore_page">restore_page</option>
                          <option value="ring_volume">ring_volume</option>
                          <option value="room">room</option>
                          <option value="room_service">room_service</option>
                          <option value="rotate_90_degrees_ccw">rotate_90_degrees_ccw</option>
                          <option value="rotate_left">rotate_left</option>
                          <option value="rotate_right">rotate_right</option>
                          <option value="rounded_corner">rounded_corner</option>
                          <option value="router">router</option>
                          <option value="rowing">rowing</option>
                          <option value="rss_feed">rss_feed</option>
                          <option value="rv_hookup">rv_hookup</option>
                          <option value="satellite">satellite</option>
                          <option value="save">save</option>
                          <option value="scanner">scanner</option>
                          <option value="schedule">schedule</option>
                          <option value="school">school</option>
                          <option value="screen_lock_landscape">screen_lock_landscape</option>
                          <option value="screen_lock_portrait">screen_lock_portrait</option>
                          <option value="screen_lock_rotation">screen_lock_rotation</option>
                          <option value="screen_rotation">screen_rotation</option>
                          <option value="screen_share">screen_share</option>
                          <option value="sd_card">sd_card</option>
                          <option value="sd_storage">sd_storage</option>
                          <option value="search">search</option>
                          <option value="security">security</option>
                          <option value="select_all">select_all</option>
                          <option value="send">send</option>
                          <option value="sentiment_dissatisfied">sentiment_dissatisfied</option>
                          <option value="sentiment_neutral">sentiment_neutral</option>
                          <option value="sentiment_satisfied">sentiment_satisfied</option>
                          <option value="sentiment_very_dissatisfied">sentiment_very_dissatisfied</option>
                          <option value="sentiment_very_satisfied">sentiment_very_satisfied</option>
                          <option value="settings">settings</option>
                          <option value="settings_applications">settings_applications</option>
                          <option value="settings_backup_restore">settings_backup_restore</option>
                          <option value="settings_bluetooth">settings_bluetooth</option>
                          <option value="settings_brightness">settings_brightness</option>
                          <option value="settings_cell">settings_cell</option>
                          <option value="settings_ethernet">settings_ethernet</option>
                          <option value="settings_input_antenna">settings_input_antenna</option>
                          <option value="settings_input_component">settings_input_component</option>
                          <option value="settings_input_composite">settings_input_composite</option>
                          <option value="settings_input_hdmi">settings_input_hdmi</option>
                          <option value="settings_input_svideo">settings_input_svideo</option>
                          <option value="settings_overscan">settings_overscan</option>
                          <option value="settings_phone">settings_phone</option>
                          <option value="settings_power">settings_power</option>
                          <option value="settings_remote">settings_remote</option>
                          <option value="settings_system_daydream">settings_system_daydream</option>
                          <option value="settings_voice">settings_voice</option>
                          <option value="share">share</option>
                          <option value="shop">shop</option>
                          <option value="shop_two">shop_two</option>
                          <option value="shopping_basket">shopping_basket</option>
                          <option value="shopping_cart">shopping_cart</option>
                          <option value="short_text">short_text</option>
                          <option value="show_chart">show_chart</option>
                          <option value="shuffle">shuffle</option>
                          <option value="signal_cellular_4_bar">signal_cellular_4_bar</option>
                          <option value="signal_cellular_connected_no_internet_4_bar">signal_cellular_connected_no_internet_4_bar</option>
                          <option value="signal_cellular_no_sim">signal_cellular_no_sim</option>
                          <option value="signal_cellular_null">signal_cellular_null</option>
                          <option value="signal_cellular_off">signal_cellular_off</option>
                          <option value="signal_wifi_4_bar">signal_wifi_4_bar</option>
                          <option value="signal_wifi_4_bar_lock">signal_wifi_4_bar_lock</option>
                          <option value="signal_wifi_off">signal_wifi_off</option>
                          <option value="sim_card">sim_card</option>
                          <option value="sim_card_alert">sim_card_alert</option>
                          <option value="skip_next">skip_next</option>
                          <option value="skip_previous">skip_previous</option>
                          <option value="slideshow">slideshow</option>
                          <option value="slow_motion_video">slow_motion_video</option>
                          <option value="smartphone">smartphone</option>
                          <option value="smoke_free">smoke_free</option>
                          <option value="smoking_rooms">smoking_rooms</option>
                          <option value="sms">sms</option>
                          <option value="sms_failed">sms_failed</option>
                          <option value="snooze">snooze</option>
                          <option value="sort">sort</option>
                          <option value="sort_by_alpha">sort_by_alpha</option>
                          <option value="spa">spa</option>
                          <option value="space_bar">space_bar</option>
                          <option value="speaker">speaker</option>
                          <option value="speaker_group">speaker_group</option>
                          <option value="speaker_notes">speaker_notes</option>
                          <option value="speaker_notes_off">speaker_notes_off</option>
                          <option value="speaker_phone">speaker_phone</option>
                          <option value="spellcheck">spellcheck</option>
                          <option value="star">star</option>
                          <option value="star_border">star_border</option>
                          <option value="star_half">star_half</option>
                          <option value="stars">stars</option>
                          <option value="stay_current_landscape">stay_current_landscape</option>
                          <option value="stay_current_portrait">stay_current_portrait</option>
                          <option value="stay_primary_landscape">stay_primary_landscape</option>
                          <option value="stay_primary_portrait">stay_primary_portrait</option>
                          <option value="stop">stop</option>
                          <option value="stop_screen_share">stop_screen_share</option>
                          <option value="storage">storage</option>
                          <option value="store">store</option>
                          <option value="store_mall_directory">store_mall_directory</option>
                          <option value="straighten">straighten</option>
                          <option value="streetview">streetview</option>
                          <option value="strikethrough_s">strikethrough_s</option>
                          <option value="style">style</option>
                          <option value="subdirectory_arrow_left">subdirectory_arrow_left</option>
                          <option value="subdirectory_arrow_right">subdirectory_arrow_right</option>
                          <option value="subject">subject</option>
                          <option value="subscriptions">subscriptions</option>
                          <option value="subtitles">subtitles</option>
                          <option value="subway">subway</option>
                          <option value="supervisor_account">supervisor_account</option>
                          <option value="surround_sound">surround_sound</option>
                          <option value="swap_calls">swap_calls</option>
                          <option value="swap_horiz">swap_horiz</option>
                          <option value="swap_vert">swap_vert</option>
                          <option value="swap_vertical_circle">swap_vertical_circle</option>
                          <option value="switch_camera">switch_camera</option>
                          <option value="switch_video">switch_video</option>
                          <option value="sync">sync</option>
                          <option value="sync_disabled">sync_disabled</option>
                          <option value="sync_problem">sync_problem</option>
                          <option value="system_update">system_update</option>
                          <option value="system_update_alt">system_update_alt</option>
                          <option value="tab">tab</option>
                          <option value="tab_unselected">tab_unselected</option>
                          <option value="tablet">tablet</option>
                          <option value="tablet_android">tablet_android</option>
                          <option value="tablet_mac">tablet_mac</option>
                          <option value="tag_faces">tag_faces</option>
                          <option value="tap_and_play">tap_and_play</option>
                          <option value="terrain">terrain</option>
                          <option value="text_fields">text_fields</option>
                          <option value="text_format">text_format</option>
                          <option value="textsms">textsms</option>
                          <option value="texture">texture</option>
                          <option value="theaters">theaters</option>
                          <option value="thumb_down">thumb_down</option>
                          <option value="thumb_up">thumb_up</option>
                          <option value="thumbs_up_down">thumbs_up_down</option>
                          <option value="time_to_leave">time_to_leave</option>
                          <option value="timelapse">timelapse</option>
                          <option value="timeline">timeline</option>
                          <option value="timer">timer</option>
                          <option value="timer_10">timer_10</option>
                          <option value="timer_3">timer_3</option>
                          <option value="timer_off">timer_off</option>
                          <option value="title">title</option>
                          <option value="toc">toc</option>
                          <option value="today">today</option>
                          <option value="toll">toll</option>
                          <option value="tonality">tonality</option>
                          <option value="touch_app">touch_app</option>
                          <option value="toys">toys</option>
                          <option value="track_changes">track_changes</option>
                          <option value="traffic">traffic</option>
                          <option value="train">train</option>
                          <option value="tram">tram</option>
                          <option value="transfer_within_a_station">transfer_within_a_station</option>
                          <option value="transform">transform</option>
                          <option value="translate">translate</option>
                          <option value="trending_down">trending_down</option>
                          <option value="trending_flat">trending_flat</option>
                          <option value="trending_up">trending_up</option>
                          <option value="tune">tune</option>
                          <option value="turned_in">turned_in</option>
                          <option value="turned_in_not">turned_in_not</option>
                          <option value="tv">tv</option>
                          <option value="unarchive">unarchive</option>
                          <option value="undo">undo</option>
                          <option value="unfold_less">unfold_less</option>
                          <option value="unfold_more">unfold_more</option>
                          <option value="update">update</option>
                          <option value="usb">usb</option>
                          <option value="verified_user">verified_user</option>
                          <option value="vertical_align_bottom">vertical_align_bottom</option>
                          <option value="vertical_align_center">vertical_align_center</option>
                          <option value="vertical_align_top">vertical_align_top</option>
                          <option value="vibration">vibration</option>
                          <option value="video_call">video_call</option>
                          <option value="video_label">video_label</option>
                          <option value="video_library">video_library</option>
                          <option value="videocam">videocam</option>
                          <option value="videocam_off">videocam_off</option>
                          <option value="videogame_asset">videogame_asset</option>
                          <option value="view_agenda">view_agenda</option>
                          <option value="view_array">view_array</option>
                          <option value="view_carousel">view_carousel</option>
                          <option value="view_column">view_column</option>
                          <option value="view_comfy">view_comfy</option>
                          <option value="view_compact">view_compact</option>
                          <option value="view_day">view_day</option>
                          <option value="view_headline">view_headline</option>
                          <option value="view_list">view_list</option>
                          <option value="view_module">view_module</option>
                          <option value="view_quilt">view_quilt</option>
                          <option value="view_stream">view_stream</option>
                          <option value="view_week">view_week</option>
                          <option value="vignette">vignette</option>
                          <option value="visibility">visibility</option>
                          <option value="visibility_off">visibility_off</option>
                          <option value="voice_chat">voice_chat</option>
                          <option value="voicemail">voicemail</option>
                          <option value="volume_down">volume_down</option>
                          <option value="volume_mute">volume_mute</option>
                          <option value="volume_off">volume_off</option>
                          <option value="volume_up">volume_up</option>
                          <option value="vpn_key">vpn_key</option>
                          <option value="vpn_lock">vpn_lock</option>
                          <option value="wallpaper">wallpaper</option>
                          <option value="warning">warning</option>
                          <option value="watch">watch</option>
                          <option value="watch_later">watch_later</option>
                          <option value="wb_auto">wb_auto</option>
                          <option value="wb_cloudy">wb_cloudy</option>
                          <option value="wb_incandescent">wb_incandescent</option>
                          <option value="wb_iridescent">wb_iridescent</option>
                          <option value="wb_sunny">wb_sunny</option>
                          <option value="wc">wc</option>
                          <option value="web">web</option>
                          <option value="web_asset">web_asset</option>
                          <option value="weekend">weekend</option>
                          <option value="whatshot">whatshot</option>
                          <option value="widgets">widgets</option>
                          <option value="wifi">wifi</option>
                          <option value="wifi_lock">wifi_lock</option>
                          <option value="wifi_tethering">wifi_tethering</option>
                          <option value="work">work</option>
                          <option value="wrap_text">wrap_text</option>
                          <option value="youtube_searched_for">youtube_searched_for</option>
                          <option value="zoom_in">zoom_in</option>
                          <option value="zoom_out">zoom_out</option>
                          <option value="zoom_out_map">zoom_out_map</option>
                        </select>
                      </div>
                    </div>
                    <!--/ Ícones -->

                    <!-- Descrição -->
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea name="planoDescricao" id="planoDescricao" rows="10"><?=$planoDescricao;?></textarea>
                        <label for="planoDescricao" class="active label-textarea">Descrição</label>
                      </div>
                    </div>
                    <!--/ Descrição -->

                  </div>
                  <div class="col s12 pb-5 text-center">
                    <button type="submit" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">CADASTRAR</button>
                    <a onclick="closeModal('#plano-de-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light grey light-2 white-text">FECHAR</a>
                  </div>
                </form>

              </div>
            </div>
            <!--/ Novo Plano de Conta -->

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="#" onclick="openModal('#plano-de-conta')" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                <i class="material-icons">add</i>
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- END: Page Main-->

    <?php
      include "app-includes/footer/credits.php";
      include "app-includes/footer/vendor.js.php";
    ?>

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/financeiro-contas-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>