<!DOCTYPE html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">

   <script src="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.js"></script>
   <link href="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.css" rel="stylesheet">

   <style type="text/css">
       html, body{
           height:100%;
           padding:0px;
           margin:0px;
           overflow: hidden;
       }

   </style>
</head>
<body>
<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
   <div class="dhx_cal_navline">
       <div class="dhx_cal_prev_button">&nbsp;</div>
       <div class="dhx_cal_next_button">&nbsp;</div>
       <div class="dhx_cal_today_button"></div>
       <div class="dhx_cal_date"></div>
       <div class="dhx_cal_tab" name="day_tab"></div>
       <div class="dhx_cal_tab" name="week_tab"></div>
       <div class="dhx_cal_tab" name="month_tab"></div>
   </div>
   <div class="dhx_cal_header"></div>
   <div class="dhx_cal_data"></div>
</div>
<script type="text/javascript">
    scheduler.config.date_format = "%Y-%m-%d %H:%i:%s";
    scheduler.setLoadMode("day");

    scheduler.init("scheduler_here", new Date(2026, 0, 6), "week");

    scheduler.load("/api/events", "json");
    const dp = scheduler.createDataProcessor({
        url: "api/events",
        mode: "REST"
    });
</script>
</body>