
<?PHP
session_start();

if (!defined('CORE_CONFIG_LOADED')) {
    @include "v3/config/global.php";
}

include "control/neo_headers.php";
include "control/neo_footer.php";
include_once("control/neo_google_analytics.php");
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>StratusCore | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The best value in 3D rendering & VR stitching. Cloud rendering for secure on-demand rendering when you need it."   />
    <meta name="keywords" content="Secure cloud-based content creation & production tools: 3D rendering, storage, workstation, file transfer, collaboration. Get free membership & test renders, 3D rendering, storage, workstation, file transfer, collaboration, render farm, cloud render, 3d artist, digital artist, maya software" />
    <meta name="author" content="" />
     <!--google site verification -->
    <meta name="google-site-verification" content="qC8C5C-VQfAV7P-goqBF5nyY3ozqrsBml27raju8kkM" />

    <link href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,500,500i,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/brochure-pricing.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
    
    <!-- Stratuscore Zendesk Widget script -->
    <script>
      /*<![CDATA[*/
      window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function()
      {a.push(arguments)}
      ,window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try
      {o=s}
      catch(e)
      {n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}
      o.open()._l=function()
      {var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="stratuscore.zendesk.com",this.zEQueue=a,this.body.appendChild(e)}
          ,o.write('<body onload="document._l();">'),o.close()}();
      /*]]>*/
    </script>

    <?PHP google_analytics();?>
    <?PHP headers_artist();?>

    <style>
      .header {
        clear: both;
        position: relative;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        width: 100%;
        background-image: linear-gradient(#2683DE, #7297E0);
        background-size: cover;
        background-position: center;
        height: 185px;
        text-align: center;
      }
      .home {
        padding-top: 50px;
      }
      .create-render {
        background-color: #fff;
      }
      h1 {
        color:#fff;font-weight:800;margin-bottom:18px;
      }
      h6 {
        color:#fff;font-weight:700;padding-top:0px;
      }
      .tile-head {
        height: 126px;
        background-image: linear-gradient(#203165, #187776);
        padding: 35px;
        text-align: center;
      }
      .tile-body {
        padding: 14px 14px 0px 14px;
        height: 125px;
      }
      .tile-details {
        background: #fff;
      }
      .tile-title {
        font-size:14px;font-weight:700;
      }
      .tile-text {
        font-size:12px;font-weight:400;
      }
      .tile-hr {
        border-bottom:solid 1px #d4d6dc;margin:0px 14px 10px 10px;
      }
      .tile-description {
        font-size:12px;padding:0px 14px;
      }
      .tile-requirements-text {
        font-size:11px;line-height:14px;margin-top:16px;padding:0px 14px;
      }
      .tile-learn-more {
        font-size:12px;font-weight:600;color:#898E9D;margin-top:24px;margin-bottom:10px;padding:0px 14px 10px 14px;
      }
      
      .flex-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      .item {
        box-shadow: 0px 1px 6px -1px rgba(0,0,0,0.37);
        width: 280px;
        float: left;
        height: 250px;
        overflow: hidden;
        margin: 20px;
        background: #fff;
      }
      .item:hover >.item-extend {
        box-shadow: 0px 1px 6px -1px rgba(0,0,0,0.37);
        position: absolute;
        width: 280px;
        background: #fff;
        cursor: pointer;
      }

    </style>

  </head>

  <body>
    <div id="home">
      <!-- ======= HEADER =========== -->
      <header class="header" role="banner">
        <div class="page-inner" style="padding-top:40px;">
          <h1>Try Now on StratusCore</h1>
          <h6>
            3 hour free trials of software on StratusCore’s Virtual Workstation
          </h6>
        </div>
      </header>

      <!-- ======= SW LISTING =========== -->
      <div class="create-render" style="background:#F6F8FB;">
        <div style="padding-top:50px;">
          <div class="row">
            
            <div class="col-sm-12 text-center">
              <div style="font-size:16px;font-weight:700;">
                Select a trial below then log in or register to get started. 
              </div>
              <div style="font-size:14px;font-weight:500;margin-bottom:30px;">
                You may only have one active trial at a time. Each trial is one per customer. 
              </div>
            </div>

            <div id="app" style="width:1200px;margin-left:auto;margin-right:auto;">

              <div class="flex-container">
                <div v-for="(trial,index) in trialsWithUniqueIcons">
                  <div class="item">
                    <div class="item-extend" v-bind:style="{'z-index':(900+index)}" @click="gotoTrial(trial.url_key)">
                      <div style="height:126px;background-image: linear-gradient(#203165, #187776);padding:35px;text-align:center;">

                        <!-- only use the first 3 icons -->
                        <template v-for="sw in trial.software">
                          <!-- check if there is a featured prop -->
                          <template v-if="sw.featured">
                            <!-- if featured then show -->
                            <template v-if="sw.featured == 1">
                              
                              <img v-bind:src="'v3/assets/img/icons/'+sw.vendoriconpath" style="max-height:65px;margin:0px 5px;" />

                            </template>
                          </template>
                        </template>
                        
                      </div>
                      <div class="tile-body">
                        <div class="row" style="padding-bottom:18px;">
                          <div v-bind:class="{'col-sm-6':trial.requirements_text, 'col-sm-12':!trial.requirements_text}" style="padding-right:0;">
                            <span v-if="trial.trial_name" class="tile-title">{{trial.trial_name}}</span>
                            <span v-else-if="trial.isv_name" class="tile-title">{{trial.isv_name}}</span>
                            <br />
                            <span class="tile-text">
                              
                            <!-- TODO:use pluralize -->
                              <span v-if="trial.summary.application">
                                {{trial.summary.application}} software
                              </span>
                              <span v-if="trial.summary.plugin">
                                {{trial.summary.plugin}} plugin<span v-if="trial.summary.plugin>1">s</span>
                              </span>
                              <span v-if="trial.summary.script">
                                {{trial.summary.script}} script<span v-if="trial.summary.script>1">s</span>
                              </span>
                              
                            </span>
                          </div>
                          <div v-if="trial.requirements_text" class="col-sm-6 tile-text text-right" style="padding-left:0;">
                            Requires: 
                            <span v-for="icon in trial.requirements_text.prereq_icons">
                              <img v-bind:src="'v3/assets/img/purchase/'+icon" style="width:28px;margin-right:3px;" v-bind:alt="trial.requirements_text.prereq_vendor_str+trial.requirements_text.prereq_software_str" /> 
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="tile-hr">
                      </div>
                      <!-- moving part begin -->
                      <div class="tile-details">
                        <div class="tile-description">
                          {{trial.description}}
                        </div>
                        <div v-if="trial.requirements_text" class="tile-requirements-text">
                          <span style="color:#f00;">*</span>Requires an active {{trial.requirements_text.prereq_vendor_str}}  subscription for {{trial.requirements_text.prereq_software_str}}
                          <!-- example: Requires an active Adobe Creative Cloud subscription for After Effects or Premiere Pro -->
                        </div>
                        <div class="tile-learn-more">
                          Learn More <i class="fas fa-arrow-circle-right"></i>
                        </div>
                      </div>
                      <!-- moving part end -->
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="row" style="margin-top:50px;padding-bottom:50px;">
            <div class="col-md-12 text-center" style="font-size:14px;font-weight:600;">
              System Requirements
            </div>
            <div class="col-md-12 text-center" style="font-size:14px;font-weight:400;">
              Trials are available on Windows 10 or Mac OS (X 10.7 and later).
              A minimum 8 MB/s internet connection is recommended.
            </div>
          </div>

        </div>
      </div>

      <div class="create-render">
        <div class="page-inner" style="padding-top:50px;background:#fff;">
          <div class="row" style="margin-top:50px;background:#fff;">
            <div class="col-md-6">
              <div style="font-size:16px;font-weight:700;margin-bottom:10px;">
                What is Virtual Workstation?
              </div>
              <div style="font-size:14px;font-weight:400;">
                <a href="https://support.stratuscore.com/hc/en-us/articles/115003853863-What-is-Virtual-Workstation-" target="_blank">Virtual Workstation</a> is a powerful, GPU-accelerated computer that comes pre-loaded with fully working content creation software. Connect via the cloud to experience a high-powered, professional workstation from the comfort of your desktop or laptop computer.
              </div>
            </div>
            <div class="col-md-6">
              <div style="font-size:16px;font-weight:700;margin-bottom:10px;">
                What is StratusCore?
              </div>
              <div style="font-size:14px;font-weight:400;">
                StratusCore is a platform that gives you instant access to a full suite of products tailored to the VFX artist experience such as on-demand rendering and digital content creation tools that you can rent by the hour.
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <?PHP footer_artist();?>
    
    <script>

      Vue.config.debug = true;
      Vue.config.devtools = true;

      var app = new Vue(
        {
          el: '#app',
          data :{
              trials: []
          },
          methods: {
            getTrials:function(){
              this.$http.post(
              '<?php echo $portalfqdn.'user-api.php'; ?>',
                  {
                      ApiAction: 'getTrialListing'
                  }, {
                      emulateJSON: true,
                      responseType: 'json'
                  }
              ).then(
                  response => {
                      this.trials = response.body;
                  }
              );
            },
            gotoTrial(url) {
              window.location.href='try/'+url;
            },
            getUnique(softwareArray) {
              const result = Array.from(new Set(softwareArray.map(s => s.vendoriconpath)))
              .map(vendoriconpath => {
                return {
                  vendoriconpath: vendoriconpath,
                  featured: softwareArray.find(s => s.vendoriconpath === vendoriconpath).featured,
                  vendorapptype: softwareArray.find(s => s.vendoriconpath === vendoriconpath).vendorapptype
                };
              });
              return result;
            }
          },
          created() {
              this.getTrials();
          },
          computed: {
              trialsWithUniqueIcons: function () {

                //loop through trials array and remove any duplicate vendoriconpath values

                var newArray = this.trials;

                for(var i = 0;i<newArray.length;i++){
                  for(var j = 0;j<newArray[i].software.length;j++){
                    
                    //get unique array of icon paths with the featured and vendorapptype props included        
                    newArray[i].software = this.getUnique(newArray[i].software);

                  }
                }

                return newArray
            },
          }
        }
      );

    </script>
    
  </body>
  </html>