@extends('layout.master')

@section('title')
  {{ trans('dashboard.home.title') }}
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">{{ trans('dashboard.home.title') }}</h3>
      <div class="box-tools pull-right">
        <div class="has-feedback">
          <input type="text" class="form-control input-sm" placeholder="Search Mail">
          <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
      <div class="mailbox-controls">
        <!-- Check all button -->
        <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
        <div class="btn-group">
          <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
        </div><!-- /.btn-group -->
        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
        <div class="pull-right">
          1-50/200
          <div class="btn-group">
            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
          </div><!-- /.btn-group -->
        </div><!-- /.pull-right -->
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
          <tr>
            <td><div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">5 mins ago</td>
          </tr>
          </tbody>
        </table><!-- /.table -->
      </div><!-- /.mail-box-messages -->
    </div><!-- /.box-body -->
    <div class="box-footer no-padding">
      <div class="mailbox-controls">
        <!-- Check all button -->
        <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
        <div class="btn-group">
          <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
        </div><!-- /.btn-group -->
        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
        <div class="pull-right">
          1-50/200
          <div class="btn-group">
            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
          </div><!-- /.btn-group -->
        </div><!-- /.pull-right -->
      </div>
    </div>
  </div>
@stop

@section('head')
  <link href="js/vendor/iCheck/all.css" rel="stylesheet" type="text/css" />
@stop

@section('scripts')
  <script src="js/vendor/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>

    $(function () {
      //Enable iCheck plugin for checkboxes
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
      });

      //Enable check and uncheck all functionality
      $(".checkbox-toggle").click(function () {
        var clicks = $(this).data('clicks');
        if (clicks) {
          //Uncheck all checkboxes
          $("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
        } else {
          //Check all checkboxes
          $("input[type='checkbox']", ".mailbox-messages").iCheck("check");
        }
        $(this).data("clicks", !clicks);
      });

      //Handle starring for glyphicon and font awesome
      $(".mailbox-star").click(function (e) {
        e.preventDefault();
        //detect type
        var $this = $(this).find("a > i");
        var glyph = $this.hasClass("glyphicon");
        var fa = $this.hasClass("fa");

        //Switch states
        if (glyph) {
          $this.toggleClass("glyphicon-star");
          $this.toggleClass("glyphicon-star-empty");
        }

        if (fa) {
          $this.toggleClass("fa-star");
          $this.toggleClass("fa-star-o");
        }
      });
    });
  </script>
@stop
