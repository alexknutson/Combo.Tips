<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=680, user-scalable=yes">
<head>
<meta name="description" content="Puzzle &amp; Dragons Combo Tips, Tools, and Strategy information for the Puzzle &amp; Dragons Player.">
<meta name="keywords" content="combo tips, puzzle and dragons, pad, card, game, deck, board, gungho">
<meta name="language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" 
      type="image/png" 
      href="/images/favicon.ico">  
  <title>Combo Tips - The Puzzle &amp; Dragons optimizer</title>
    <script src="/ext/jquery-1.9.1.min.js"></script>
    <script src="/ext/dropzone.min.js"></script>
    <script src="/ext/bootstrap-slider.min.js"></script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54322831-1', 'auto');
  ga('send', 'pageview');

  </script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/basic.css">
<link rel="stylesheet" type="text/css" href="css/dropzone.css">
<link rel="stylesheet" type="text/css" href="css/throbber.css">
<link rel="stylesheet" type="text/css" href="css/border-flash.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<meta charset="utf-8"/>
<style>

@import url(http://fonts.googleapis.com/css?family=Raleway:100);
      .navbar-nav > li > a {
        line-height: 1.42857143;
      }
      .row {
        margin-right: 0;
      }

      @font-face {
      font-family: PnDIcons;
      src: url('fonts/pndicons.eot?') format('eot'),
      url('fonts/pndicons.woff') format('woff'),
      url('fonts/pndicons.ttf') format('truetype'),
      url('fonts/pndicons.svg') format('svg');
      }
      #grid, #path {
      top: 20px;
      left: 20px;
      position: absolute;
      }
      #path { pointer-events: none; z-index: 2; }
      .e0, .e1, .e2, .e3, .e4, .e5, .e6, .eX {
      font-family: PnDIcons;
      text-align: center;
      vertical-align: middle;
      border-radius: 50%;
      width: 1.5em;
      height: 1.5em;
      line-height: 1.5em;
      display: inline-block;
      }
      #grid .e0, #grid .e1, #grid .e2, #grid .e3, #grid .e4, #grid .e5, #grid .e6, #grid .eX {
      font-size: 40px;
      }
      #grid > div { position: absolute; cursor: pointer; }
      #grid > div:nth-child(6n+1) { left: 0px; }
      #grid > div:nth-child(6n+2) { left: 64px; }
      #grid > div:nth-child(6n+3) { left: 128px; }
      #grid > div:nth-child(6n+4) { left: 192px; }
      #grid > div:nth-child(6n+5) { left: 256px; }
      #grid > div:nth-child(6n+6) { left: 320px; }
      .row1 { top: 0px; }
      .row2 { top: 64px; }
      .row3 { top: 128px; }
      .row4 { top: 192px; }
      .row5 { top: 256px; }
      .e0 { background: #b12; color: #f74; }
      .e0::before { content: "\1f525"; /*fire*/ }
      .e1 { background: #15b; color: #8ff; }
      .e1::before { content: "\1f4a7"; /*droplet*/ }
      .e2 { background: #074; color: #4f6; }
      .e2::before { content: "\1f342"; /*leaf*/ }
      .e3 { background: #872; color: #fe5; }
      .e3::before { content: "\2600"; /*sun*/ }
      .e4 { background: #709; color: #d5c; }
      .e4::before { content: "\263e"; /*moon*/ }
      .e5 {
      background: #e28;
      color: #f7d;
      border-radius: 8%;
      margin: 0.1em;
      width: 1.3em;
      height: 1.3em;
      }
      .e5::before { content: "\2665"; /*heart*/ }
      .e6 { background: white; color: navy; }
      .e6::before { content: "\1f608"; /*demon*/ }
      .eX { background: #444; color: #ccc; }
      .eX::before { content: "?"; }
      #profile {
      position: absolute;
      left: 445px;
      top: 20px;
      }
      #profile .e0, #profile .e1, #profile .e2, #profile .e3, #profile .e4, #profile .e6, #profile .e5, #profile .eX {
      font-size: 16px;
      }
      #profile input { width: 2.8em; }
      #controls {
      position: absolute;
      left: 20px;
      top: 346px;
      width: 380px;
      text-align: center;
      line-height: 2em;
      }
      #extra-controls {
      position: absolute;
      left: 37px;
      top: 459px;
      z-index: 9999;
      }
      #solve {
      min-width: 350px;
      font-size: 2.25em;
      font-weight: bold;
      }
      #status {

      }
      #solutions {

      }
      #solutions li { padding: 4px; cursor: pointer; }
      #solutions li:hover { background: #cfc; }
      #hand {
      position: absolute;
      background: yellow;
      border: 2px solid black;
      width: 10px;
      height: 10px;
      }
      #import-popup, #change-popup {
      position: absolute;
      border: 3px solid black;
      background: #eee;
      padding: 20px;
      }
      #import-popup {
      width: 400px;
      height: 220px;
      left: 440px;
      top: 190px;
      }
      #change-popup {
      width: 190px;
      top: 65px;
      left: 450px;
      font-size: 30px;
      z-index: 10001;
      }
      #import-legend, #change-popup { line-height: 1.6em; }
      #import-textarea {
      position: absolute;
      left: 125px;
      top: 20px;
      font-size: 28px;
      font-family: 'Roboto', monospace;
      letter-spacing: 28px;
      }
      #import-control, #change-control {
      right: 20px;
      bottom: 20px;
      }
      #change-control input {
        width: 100%;
        display: inline-block;
        margin-top: 13px;
      }
      #import-import, #change-change { font-weight: bold; }
      .change-target { cursor: pointer; }
      .prev-selection { 
        background-color: #363634;
      }

      #solutions {
        left: 800px;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 14px;
        overflow: auto;
        padding: 5%;
        background-color:rgba(0,0,0,0.35);
        width: 100%;
      }
      #solutions:hover li {
        padding-left: 11px;
      }
      #solutions li {
        transition: background-color 0.05s ease-in-out;
        transition: padding 0.3s ease;
      }

      #solutions li:hover {
        background: rgb(60,60,60);
        padding: 20px 11px;
      }
#screenshot-upload {

  display: block;
  background-color: white;
  border: 1px solid black;
}
.uploaded-image {
  display: block;
  cursor: pointer;
  width: 100%;
      }
      .dots {
        position: fixed !important;
        bottom: 50%;
        right: 50%;
        z-index: 99999999;
        transform: scale(6);
      }
      .navbar-right .upload ul {
        width: 550px;
      }

      .uploaded-image {

      }
      body {
        background: url('/images/black_linen_v2.png');
        background-repeat: repeat;
        font-family: 'Roboto', Helvetica;

      }
      th, label, #status, li, p {
        color: white;  
      }
      #profile-selector {
        color: black;
      }
      #screenshot-upload {
        padding: 0px;
      }
      .dz-details{
        width: 100% !important;
        height: auto !important;
        float: left;
        top: -90px;
        padding: 0px !important;
      }
      .dz-message {
        transform: scale(0.5);
      }
      .dz-image-preview {
        width: 90% !important;
        cursor: pointer !important;
        display: block !important;
        float: left;
        max-height: 86px;
        overflow:hidden;
        padding: 0px !important;
      }
      .dz-image-preview:hover {
        
      }
      .dz-details img {
        position:relative !important;
        width: 100% !important;
        height: auto !important;
        opacity: 1 !important;
        cursor: default !important;
      }
      .dz-details img:hover {
      }
      .dz-filename {
        display: none !important;
      }
      .list-float-left {
        width: 40%;
        display: block;
        float: left;
      }
      .list-float-right {
        width: 60%;
        display: block;
        float: left;

      }
      .navbar-fixed-bottom .navbar-collapse {
          max-height: 650px !important;
      }
      .navbar-fixed-bottom {
          z-index: 99999;
          font-size: 200%;
      }
      .upload .glyphicon {
        color: rgb(93,167,102);
        padding: 20px;

      }
      #keep-open {
        background-color: rgba(158,190,149,1);
        color: black;
border: 1px solid rgba(0,0,0,0.09);
      }
      #keep-open:hover {
        background-color: rgba(208, 224, 203, 1);
        background-image: none;
      }
      #keep-open label {
        color: black;
      }
      
      .dropdown-menu span {
        color: white;
        display: table-cell;
      }

      #bs-example-navbar-collapse-1::-webkit-scrollbar {
        width: 1em;
      }

      #bs-example-navbar-collapse-1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      }

      #bs-example-navbar-collapse-1::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
      }

      @media (min-width: 768px) {
      .navbar-brand {
        font-size: 132% !important;
      }
      .dropdown-menu span {
        color: black;
      }
      }
      @media (max-width: 991px) {
          #solutions {
            margin-top: 600px;
          }
          #keep-open {
            display: none;
          } 
      .background-fade {
        width: 100%;
        height: 100%;
        display: block;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        z-index: 99997;
        top: 0;
        display: none;
      }
      }
      body .modal-backdrop {
        background-color: black !important;
        opacity: 0.8 !important;
        display:none;
      }
      .navbar-fixed-bottom {
        z-index: 9999;
      }
      #bitcoin-donate-msg {
        position: relative;
        top: -27px;
        right: 5px;
        padding: 5px;
        border-top-left-radius: 9px;
        border-bottom-left-radius: 9px;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
      }
      .support-tag {
        color: orange;
      }
      .secondary-navbar-bottom {
        position: fixed;
        display: block;
        bottom: 65px;
        font-size: 13px;
        color: rgba(255,255,255,0.7);
        width: 100%;
        background-color: rgba(0,0,0,0.9);
        padding-left: 9px;
        padding-top: 13px;
      }
      #max-length {
        width: auto !important;
        color: black;
      }
      label[for=num-paths] {
        float: left;
        padding-right: 5px;
      }
      .slow-warning {
        color: white;
        display: block;
        float: left;
        clear: both;
      }
      #num-path-value {
        color: white;
        float: left;
        font-weight: bold;
        display: block;
        padding: 7px;
        border-radius: 90px;
        border: 1px solid black;
        font-size: 14px;
        position: relative;
        top: -6px;
        left: 6px;
        text-align: center;
      }
      #num-path-value.fast {
        background-color: rgb(106, 156, 90);
      }
      #num-path-value.medium {
        background-color: rgb(206, 151, 69);
      }
      #num-path-value.slow {
        background-color: rgb(255,71,71);
        border: 1px solid black;
        font-weight: bold;
        color: white;
      }
      #extra-controls select, #extra-controls input {
        width: 108px;
        margin-bottom: 10px;
        padding: 8px 10px;
      }

      .center-text th {
        text-align: center !important;
      }
      .center-text th i {
        color: rgb(93,167,102);
        cursor: pointer;
      }

      /** LOADING SOLUTIONS ANIMATION */
      .loading-throbber {
        display: none;
      }
      .loading-throbber span {
        color:#4a8df8;
        font-family: 'Raleway', cursive; 
        font-weight:100; 
        font-stretch:normal;
        font-size:3.5em;
      }

      .sliderOMG{
        position:absolute;
        width:400px;
        height:2px;
        left: 0px;
      }
      .line{
        position:absolute;
        background:#4a8df8;
        width:400px;
        height:2px;

      }
      .break{
        position:absolute;
        background:#222;
        width:6px;
        height:2px;  
      }

      .dot1{
        -webkit-animation: loading 2s infinite;
        -moz-animation: loading 2s infinite;
        -ms-animation: loading 2s infinite;
        -o-animation: loading 2s infinite;
        animation: loading 2s infinite;
      }
      .dot2{
        -webkit-animation: loading 2s 0.5s infinite;
        -moz-animation: loading 2s 0.5s infinite;
        -ms-animation: loading 2s 0.5s infinite;
        -o-animation: loading 2s 0.5s infinite;
        animation: loading 2s 0.5s infinite;
      }
      .dot3{
        -webkit-animation: loading 2s 1s infinite;
        -moz-animation: loading 2s 1s infinite;
        -ms-animation: loading 2s 1s infinite;
        -o-animation: loading 2s 1s infinite;
        animation: loading 2s 1s infinite;
      }

      @keyframes "loading" {
        from { left: 0; }
        to { left: 400px; }
      }
      @-moz-keyframes loading {
        from { left: 0; }
        to { left: 400px; }
      }
      @-webkit-keyframes "loading" {
        from { left: 0; }
        to { left: 400px; }
      }
      @-ms-keyframes "loading" {
        from { left: 0; }
        to { left: 400px; }
      }
      @-o-keyframes "loading" {
        from { left: 0; }
        to { left: 400px; }
      }
      .slider {
      }


    </style>
  </head>
  <body>
<!-- <form id="imgur_upload" action="upload.php" method="POST">
 Choose Image : <input name="img" size="35" type="file"/><br/>
 <input type="submit" name="submit" value="Upload"/>
 </form> -->

    <canvas id="path" width="380" height="316"></canvas>
    <div id="grid">
      <div id="o00" class="row1"></div>
      <div id="o01" class="row1"></div>
      <div id="o02" class="row1"></div>
      <div id="o03" class="row1"></div>
      <div id="o04" class="row1"></div>
      <div id="o05" class="row1"></div>

      <div id="o10" class="row2"></div>
      <div id="o11" class="row2"></div>
      <div id="o12" class="row2"></div>
      <div id="o13" class="row2"></div>
      <div id="o14" class="row2"></div>
      <div id="o15" class="row2"></div>

      <div id="o20" class="row3"></div>
      <div id="o21" class="row3"></div>
      <div id="o22" class="row3"></div>
      <div id="o23" class="row3"></div>
      <div id="o24" class="row3"></div>
      <div id="o25" class="row3"></div>

      <div id="o30" class="row4"></div>
      <div id="o31" class="row4"></div>
      <div id="o32" class="row4"></div>
      <div id="o33" class="row4"></div>
      <div id="o34" class="row4"></div>
      <div id="o35" class="row4"></div>

      <div id="o40" class="row5"></div>
      <div id="o41" class="row5"></div>
      <div id="o42" class="row5"></div>
      <div id="o43" class="row5"></div>
      <div id="o44" class="row5"></div>
      <div id="o45" class="row5"></div>
    </div>
    <div id="profile">
    <table>
        <tr class="center-text">
            <th></th>
            <th>N</th>
            <th>Mass</th>
            <th>RA</th>
            <th>TPA-W</th>
        </tr>
        <tr>
            <td class="e0" title="Fire"></td>
            <td><input id="e0-normal" value="1"/></td>
            <td><input id="e0-mass" value="3"/></td>
			<td><input id="e0-row" value="0"/></td>
			<td><input id="e0-tpa" value="0"/></td>
        </tr>
        <tr>
            <td class="e1" title="Water"></td>
            <td><input id="e1-normal" value="1"/></td>
            <td><input id="e1-mass" value="3"/></td>
			<td><input id="e1-row" value="0"/></td>
			<td><input id="e1-tpa" value="0"/></td>
        </tr>
        <tr>
            <td class="e2" title="Wood"></td>
            <td><input id="e2-normal" value="1"/></td>
            <td><input id="e2-mass" value="3"/></td>
			<td><input id="e2-row" value="0"/></td>
			<td><input id="e2-tpa" value="0"/></td>
        </tr>
        <tr>
            <td class="e3" title="Light"></td>
            <td><input id="e3-normal" value="1"/></td>
            <td><input id="e3-mass" value="3"/></td>
			<td><input id="e3-row" value="0"/></td>
			<td><input id="e3-tpa" value="0"/></td>
        </tr>
        <tr>
            <td class="e4" title="Dark"></td>
            <td><input id="e4-normal" value="1"/></td>
            <td><input id="e4-mass" value="3"/></td>
			<td><input id="e4-row" value="0"/></td>
			<td><input id="e4-tpa" value="0"/></td>
        </tr>
        <tr>
            <td class="e5" title="Heal"></td>
            <td><input id="e5-normal" value="0.3"/></td>
            <td><input id="e5-mass" value="0.3"/></td>
			<td><input id="e5-row" value="0"/></td>
			<td><input id="e5-tpa" value="0"/></td>
        </tr>
        <tr>
            <td class="e6" title="Junk"></td>
            <td><input id="e6-normal" value="0.1"/></td>
            <td><input id="e6-mass" value="0.1"/></td>
			<td><input id="e6-row" value="0"/></td>
			<td><input id="e6-tpa" value="0"/></td>
        </tr>
        <tr class="center-text">
            <th></th>
            <th><a data-toggle="tooltip" title="Normal"><i class="glyphicon glyphicon-question-sign"></i></a></th>
            <th><a data-toggle="tooltip" title="Mass"><i class="glyphicon glyphicon-question-sign"></i></a></th>
            <th><a data-toggle="tooltip" title="Row Awkns"><i class="glyphicon glyphicon-question-sign"></i></a></th>
            <th><a data-toggle="tooltip" title="TPA Weight - Put the additional weight coming from TPAs. E.g. If you have 3 monsters with 1k green attack and one has a TPA and ones has two TPA, the base weight is 3 and the TPA effect is 1*1.5 for the single TPA (.5 extra) and 1*1.5*1.5 = 2.25 (1.25 extra) for the double TPA so you enter 1.75."><i class="glyphicon glyphicon-question-sign"></i></a></th>
        </tr>
    </table>
      <p><br>
        Profile:<br> 
        <select class="btn btn-default"  id="profile-selector">
        <option value="
        1,3,0,0,
        1,3,0,0,
        1,3,0,0,
        1,3,0,0,
        1,3,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1" selected="selected">5-color team, multiple target</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">5-color team, single target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,1,0,0,
        0.1,0.1,0,0,
        -1">Recovery</option>
        <option value="
        0.1,0.3,0,0,
        0.1,0.3,0,0,
        0.1,0.3,0,0,
        0.1,0.3,0,0,
        0.1,0.3,0,0,
        1,1,0,0,
        0.1,0.1,0,0,
        -1">Recovery, multiple target</option>
        <option value="
        1,3,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Fire team, multiple target</option>
        <option value="
        1,1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Fire team, single target</option>
        <option value="
        0.1,0.1,0,0,
        1,3,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Water team, multiple target</option>
        <option value="
        0.1,0.1,0,0,
        1,1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Water team, single target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,3,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Wood team, multiple target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Wood team, single target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,3,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Light team, multiple target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,1,0,0,
        0.1,0.1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Light team, single target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,3,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Dark team, multiple target</option>
        <option value="
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        0.1,0.1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Dark team, single target</option>
        <option value="
        1.7,1.7,1,2.125,
        1.1,1.1,2,1.375,
        9.5,9.5.1,4,9.875,
        0,0,0,0,
        1.3,1.3,0,1.625,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Zhuge: all double TPA</option>
        <option value="
        9,9,8,0,
        0,0,0,0,
        0,0,0,0,
        0.5,0.5,0,0,
        1.6,1.6,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Dark Shiva</option>
        <option value="
        0,0,0,0,
        1.3,1.3,0,0,
        0,0,0,0,
        0,0,0,0,
        7,7,7,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        -1">Satan</option>
        <option value="
        0,0,0,0,
        4.5,4.5,1,1.5,
        1.4,1.4,0,.45,
        2,2,0,0,
        3.3,3.3,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        0">UmiYama</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0,0,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        1">Kirin</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        2">Ra</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        3">Kush</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        0,0,0,0,
        0,0,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        4">Haku</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        5">L/L Ra</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        6">D/L Anubis</option>
        <option value="
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        1,1,0,0,
        0.3,0.3,0,0,
        0.1,0.1,0,0,
        7">Bastet</option>
        </select>
        <br>
        <br>
      <label for="max-length">Max path length:</label>
      <input id="max-length" value="20" size="3"/><br /><br />
      <label for="num-paths">Path Number Scaling</label>
      <input type="text" value="100" id="num-path-value" class="fast">
      <br>
      <!-- <input id="num-paths" value="100" size="3"/> -->
      <input type="text" id="num-paths" class="span2" value="" data-slider-min="10" data-slider-max="400" data-slider-step="10" data-slider-value="100" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide">
      <em style="display: block; margin-top: 4px;"><span style="color: rgb(93,167,102)" class="glyphicon glyphicon-arrow-up"></span>  larger: longer computation, better solutions</em>
      </p>
    </div>
    <div id="controls">
      <input type="checkbox" id="allow-8"/>
      <label for="allow-8">Allow 8-direction movement</label><br />
      <input class="btn btn-primary" type="button" value="Solve" id="solve"/>
    </div>
    <div id="extra-controls">
      <input class="btn btn-default" type="button" value="Drop matches" id="drop"/> &bull;
      <input class="btn btn-default" type="button" value="Final state" id="final"/> &bull;
      <select class="btn btn-default"  id="randomization-type">
        <option value="0,1,2">3-color</option>
        <option value="0,1,2,5">3 + Heal</option>
        <option value="0,1,2,3,4">5-color</option>
        <option value="0,1,2,3,4,5" selected="selected">5 + Heal</option>
        <option value="0,1,2,3,4,5,6">All</option>
      </select>
      <br>
      <input class="btn btn-default" type="button" value="Randomize" id="randomize"/> &bull;
      <input class="btn btn-default" type="button" value="Clear" id="clear"/> &bull;
      <input class="btn btn-default" type="button" value="Import" id="import"/> &bull;
      <br>
      <input class="btn btn-default" type="button" value="Change orbs" id="change"/>
    </div>
    <div id="hand"></div>
    <div id="import-popup">
      <div id="import-legend">
        <span class="e0"></span> = 0 / r<br />
        <span class="e1"></span> = 1 / b<br />
        <span class="e2"></span> = 2 / g<br />
        <span class="e3"></span> = 3 / y<br />
        <span class="e4"></span> = 4 / p<br />
        <span class="e5"></span> = 5 / h<br />
        <span class="e6"></span> = 6 / j<br />
        <span class="eX"></span> = . / x<br />
      </div>
      <textarea id="import-textarea" cols="6" rows="5" spellcheck="false"></textarea>
      <div id="import-control">
        <input type="button" value="Cancel" id="import-cancel"/>
        <input type="button" value="Import" id="import-import"/>
      </div>
    </div>
    <div id="change-popup">
      <div>
        <span class="e0"></span> &rarr; <span class="e0 change-target"></span><br />
        <span class="e1"></span> &rarr; <span class="e1 change-target"></span><br />
        <span class="e2"></span> &rarr; <span class="e2 change-target"></span><br />
        <span class="e3"></span> &rarr; <span class="e3 change-target"></span><br />
        <span class="e4"></span> &rarr; <span class="e4 change-target"></span><br />
        <span class="e5"></span> &rarr; <span class="e5 change-target"></span><br />
        <span class="e6"></span> &rarr; <span class="e6 change-target"></span><br />
        <span class="eX"></span> &rarr; <span class="eX change-target"></span>
      </div>
      <div id="change-control">
        <input type="button" value="Cancel" class="btn btn-danger" id="change-cancel"/>
        <input type="button" value="Change" class="btn btn-success" id="change-change"/>
      </div>
    </div>
    <div class="container-fluid" style="">
    <div class="row">
      <div class="row">
        <div class="col-md-8">
        


        </div>
        <div class="col-md-4">
          <!-- <h1>.col-md-4</h1> -->
          <div id="solutions">
          <p id="are-you-ready">Ready for tips?</p>
          <div class="loading-throbber">
          <span id="status">...</span>
          </span>
            <div class="sliderOMG">
            <div class="line"></div>
            <div class="break dot1"></div>
            <div class="break dot2"></div>
            <div class="break dot3"></div>
          </div>  
          </div>
            <ol></ol>
          </div>
        </div>
      </div>
     </div>
  </div>

<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-tower"></span> Combo.Tips (Alpha)</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse in" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown upload open">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Import from screenshot <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="list-float-left"><a href="#"><img class="uploaded-image" src="/images/image2.png"></a>
            
            <span class="glyphicon glyphicon-question-sign"> </span><span>Click the image to import</span>
            </li>
            <li class="list-float-right">
            <a href="#">
              <form id="screenshot-upload" action="upload.php" class="dropzone">
              </form>
            </a>
            </li>
            <li class="divider"></li>
            <li class="divider"></li>
            <li><a id="keep-open" href="#">
            <form role="form">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Don't close this window!</input>
              </label>
              </form>
            </div></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<span class="secondary-navbar-bottom">
<span id="bitcoin-donate-msg"><span class="support-tag">Support</span> the project <span class="glyphicon glyphicon-arrow-right"></span></span>
<a class="coinbase-button" data-code="df278ca7d92b2380ca3d3757ed5f6132" data-button-style="donation_small" href="https://coinbase.com/checkouts/df278ca7d92b2380ca3d3757ed5f6132">Donate Bitcoins</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
</span>
    <script src="/ext/easeljs-0.7.1.min.js"></script>
    <script src="/ext/main.js"></script>
    <script src="/ext/optimizer.js"></script>
  </body>
</html>
<!-- AGPLv3
  pndopt - Puzzle & Dragons Optimizer
  Copyright (C) 2013  kennytm
  
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.
  
  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
  
  -->
