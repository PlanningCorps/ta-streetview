<?php
/**
 * Template Name: Simple StreetView template
 * Description: A Page Template for streetview
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

?>
<!DOCTYPE html><html lang="en" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#" class="js"><!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta content="Home" about="/index" property="dc:title">
<link rel="shortcut icon" href="http://nyccentury.org/sites/default/files/favicon_1.ico" type="image/vnd.microsoft.icon">
<link rel="shortlink" href="http://nyccentury.org/node/54">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>5th and 6th Forward</title>
<?php wp_head();?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "77d96774-8a6c-4fd9-85e0-4776b0a0e373", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
<link rel="image_src" href="https://secure3.convio.net/ta/images/ta_logo_rgb.png" /> 
<meta name="title" content="Where can 5th and 6th avenues work better for you?"/>
<meta name="description" content="Tell us where you think something can be improved, whether it’s safer intersections, better bike lanes, access to public transit or any other feature that will enhance Manhattan’s central avenues." />
</head>

<body>
        <div class="header">
          <div class="header-inner" style="line-height: 1.3em; font-family: 'BryantWebMedium', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; background-color: #EEEEEE;">
              <div style="margin: 10px auto 0px;">
                <a href="http://transalt.org" target="_blank" title="Transportation Alternatives"><img id="ta_logo" src="http://bikenyc.org/sites/BikeNYC.org/themes/ATBikemonth/css/images/transalt_smallt.png" style="padding: 8px; float: left; margin-top: -13px;"></a>

                <div id="signup">
                  <form method="post" id="signup_form" name="signup_form" onsubmit="javascript:submitEmail(); return false;" style="background-color: #F15D22; border: medium none; border-radius: 0 0 4px 4px; padding: 4px 7px 4px 4px; height: 30px; margin-top: -10px; width: 200px; margin-bottom: 0px; margin-right: 15px;">
                    <input style="float: left; background-color: #F15D22; border: medium none; outline: none; -webkit-appearance:none; width: 145px; height: 22px; padding-left: 5px; font-size: 14px; color: #FFFFFF; font-family: 'BryantWebMedium', Helvetica, Arial, sans-serif; margin-top: 6px;" type="text" name="email" value="YOUR E-MAIL HERE" onfocus="if(this.value=='YOUR E-MAIL HERE')this.value='';" onblur="if(this.value=='')this.value='YOUR E-MAIL HERE';">
                    <img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/arrow-signup.png" style="margin-top: 3px; float: right; vertical-align: top;" onclick="javascript:submitEmail();">
                  </form>
                </div>

                <div id="get_involved" style="float: right; margin-top: 5px;">GET INVOLVED&nbsp;&nbsp;</div>
                <div id="status"></div>
              </div>
          </div>
        </div>
        
        <div class="wrapper">
            <div id="navbar">
            </div>
            <div id="mainblock">
              
              <h1>Fifth &amp; Sixth Forward</h1>

              <!-- NAVIGATION -->
              <p><a class="navButton" href="/">5th Ave</a><a class="navButton" href="/sixth">6th Ave</a><a  class="navButton" href="/about">About</a><a  class="navButton" href="/help">Using the tool</a><a  class="navButton" href="https://secure3.convio.net/ta/site/Advocacy?cmd=display&page=UserAction&id=221&pw_id=2441" target="_blank">Sign the petition</a><br/> </p> 

              <!-- SOCIAL LINKS -->
              <div class="socialLinks"><span class='st_facebook_hcount' displayText='Facebook'></span><span class='st_twitter_hcount' displayText='Tweet'></span><span class='st_email_hcount' displayText='Email'></span><span class='st_fblike_hcount' displayText='Facebook Like'></span></div>


              	<?php if ( have_posts() ) : ?>

            			<?php // twentyeleven_content_nav( 'nav-above' ); ?>

            			<?php /* Start the Loop */ ?>
            			<?php while ( have_posts() ) : the_post(); ?>

            				<?php get_template_part( 'content', get_post_format() ); ?>

            			<?php endwhile; ?>

            			<?php twentyeleven_content_nav( 'nav-below' ); ?>

            		<?php else : ?>

            		<?php endif; ?>
              </div>
            <div class="push"></div>
        </div>
        <div class="footer">
          <div class="footer-content">
                <footer>
                    <div style="overflow: visible; word-wrap: break-word;">
              <div id="block-block-13" class="block block-block">
            <div class="block-inner clearfix">
                          <div style="padding-top: 10px;">
                <div style="font-size: 10px; color: #999999; border-width: 0px;">
                  <table style="vertical-align: top; font-size: 10px; border-style: hidden; color: #999999"><tr><td>
          <a href="http://transalt.org/?utm_source=transalt.org_footer&amp;utm_medium=internalWebAd&amp;utm_content=version1&amp;utm_campaign=communications-2012" target="_blank" title="Transportation Alternatives"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/ta_sm_grey_logo.png" style="float: left; margin-right: 10px;"></a><p style="font-size: 10px; float: left;">&copy; 1997-<span id="currentYear">2013</span> <a style="color: #FF6633; text-decoration: none;" href="http://transalt.org/?utm_source=transalt.org_footer&amp;utm_medium=internalWebAd&amp;utm_content=version2&amp;utm_campaign=communications-2012" target="_blank" title="Transportation Alternatives">TRANSPORTATION ALTERNATIVES</a><br>127 West 26th Street, Suite 1002<br>New York, NY 10001<br><a style="color: #FF6633; text-decoration: none;" href="http://transalt.org/about/contact/?utm_source=transalt.org_footer&amp;utm_medium=internalWebAd&amp;utm_content=version1&amp;utm_campaign=communications-2012" target="_blank">Contact Us</a></p></td>
          <td style="vertical-align: top; float: right; line-height: 16px;">
          LEARN MORE<br><a style="color: #FF6633; text-decoration: none;" href="http://transalt.org/join?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=membership-2012" target="_blank" id="join">Join T.A.</a><br><a style="color: #FF6633; text-decoration: none;" href="http://transalt.org/ourwork/bike?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=bicycling-2012" target="_blank" id="bicycling">Bicycling</a><br><a style="color: #FF6633; text-decoration: none;" href="http://transalt.org/campaigns/pedestrian?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=streetsforall-2012" target="_blank" id="walking">Walking</a><br><a style="color: #FF6633; text-decoration: none;" href="http://riderrebellion.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=trafficandtransit-riderrebellion-2012" target="_blank" id="transit">Public Transit</a></td>
          <td style="vertical-align: top;  line-height: 16px;">
          CONNECT WITH T.A.<br><a style="color: #FF6633; text-decoration: none;" href="http://facebook.com/transportationalternatives" target="_blank" id="facebook">Facebook</a><br><a style="color: #FF6633; text-decoration: none;" href="http://twitter.com/transalt" target="_blank" id="twitter">Twitter</a><br><a style="color: #FF6633; text-decoration: none;" href="http://flickr.com/transalt" target="_blank" id="flickr">Flickr</a><br><a style="color: #FF6633; text-decoration: none;" href="http://youtube.com/transalt" target="_blank" id="youtube">YouTube</a></td>
          </tr><tr><td style="vertical-align: top;">
                       GET INVOLVED
          <hr style="color: #999999; border: none; height: 1px; background:#999999; "><br><a href="http://bikenyc.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=bicycling-2012" target="_blank" id="bikenyc"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/bikenyc.png" style="float: left; padding: 5px;"></a><a href="http://crashstat.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=enforcementandsafety-visionzero-2012" target="_blank" id="crashstat"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/crashstat.png" style="padding: 5px;"></a><a href="http://bikingrules.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=bicycling-2012" target="_blank" id="bikingrules"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/br.png" style="padding: 5px;"></a></td>

          <td style="vertical-align: top;" colspan="2">BICYCLE TOURS
          <hr style="color: #999999; border: none; height: 1px; background:#999999; "><br><a href="http://nyccentury.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=events-century-2012" target="_blank" id="century"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/century.png" style="float: left; padding: 5px;"></a><a href="http://tourdebrooklyn.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=events-tourdebrooklyn-2012" target="_blank" id="tourdebrooklyn"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/tdbk.png" style="padding: 5px;"></a><a href="http://tourdequeens.org/?utm_source=transalt.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=events-tourdequeens-2012" target="_blank" id="tourdequeens"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/queens.png" style="padding: 5px;"></a><a href="http://tourdestatenisland.org/?utm_source=tourdestatenisland.org_footer&amp;utm_medium=web&amp;utm_content=version1&amp;utm_campaign=events-tourdestatenisland-2012" target="_blank" id="tourdestatenisland"><img src="http://tourdebrooklyn.org/sites/all/themes/adaptivetheme/tourdebrooklyn_2012/css/images/footer/staten.png" style="padding: 5px;"></a>
          </td>
          </tr></table></div>

         </div>
            </div>
          </div>
            </div>
                </footer>
                </div>
             </div>
             
             <!-- TA email submit script -->
              <script type="text/javascript">
               function submitEmail() {
                 var xmlHttp;
                 try {
                   // Firefox, Opera 8.0+, Safari
                   //document.getElementById("progressIndicator").style.display = "block";
                   xmlHttp = new XMLHttpRequest();
                 } catch (e) {
                   // Internet Explorer
                   try  {
                     xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                   } catch (e) {
                     try {
                       xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                     } catch (e) {
                       document.getElementById("searchstatus").innerHTML="<strong>Your browser does not support AJAX.</strong>";
                       return false;
                     }
                   }
                 } // end try block

                 xmlHttp.onreadystatechange = function() {

                   if (xmlHttp.readyState == 4) {
                     results = xmlHttp.responseText;
                     document.getElementById("status").innerHTML = results.toString();
                     var t=setTimeout("document.getElementById('status').innerHTML = ''; ", 5000);
                   } // end readyState == 4
                 } // end inner function
                 theURL = "/wp-content/themes/ta/signup.php?site=transalt.org&email=" + encodeURI(document.signup_form.email.value);
                 xmlHttp.open("GET", theURL, true);
                 xmlHttp.send(null);
               }
             </script>
    </body>
</html>