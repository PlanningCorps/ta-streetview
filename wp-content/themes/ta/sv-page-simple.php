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
<meta name="description" content="Give feedback on 5th and 6th Avenues.">
<link rel="shortlink" href="http://nyccentury.org/node/54">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>5th and 6th Forward</title>
<?php wp_head();?>

<link rel="stylesheet" type="text/css" href="http://ta.fkh.webfactional.com/wp-content/themes/ta/style.css">


</head>

<body>
        <div class="wrapper">
            <div id="navbar">
               <a href="http://transalt.org/" target="_blank" title="Transportation Alternatives"><img src="http://bikenyc.org/sites/BikeNYC.org/themes/ATBikemonth/css/images/transalt_smallt.png" style="padding: 8px 8px 0px; float: left; margin-top: -13px;"></a>
            </div>
            <div id="mainblock">
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

          <table style="border-style: hidden;"><tbody><tr><td>
        				<a href="http://transalt.org/" target="_blank" title="Transportation Alternatives"><img src="http://bikenyc.org/sites/BikeNYC.org/themes/ATBikemonth/css/images/ta_sm_grey_logo.png" style="float: left; margin-right: 10px;"></a><p style="padding-top: 5px;">© 1997-<span id="currentYear">2013</span> <a href="http://transalt.org/" target="_blank" title="Transportation Alternatives">TRANSPORTATION ALTERNATIVES</a><br>127 West 26th Street, Suite 1002<br>New York, NY 10001<br><a href="http://nyccentury.org/contact">Contact Us</a></p>
        			</td>
        			<td style="vertical-align: top; float: right; line-height: 16px;">
        				LEARN MORE<br><a href="http://transalt.org/join" target="_blank" id="bicycling">Join T.A.</a><br><a href="http://transalt.org/campaigns/bike" target="_blank" id="bicycling">Bicycling</a><br><a href="http://transalt.org/campaigns/pedestrian" target="_blank" id="walking">Walking</a><br><a href="http://riderrebellion.org/" target="_blank" id="transit">Public Transit</a>
        			</td>
        			<td style="vertical-align: top;  line-height: 16px;">
        				CONNECT WITH T.A.<br><a href="http://facebook.com/transalt" target="_blank" id="facebook">Facebook</a><br><a href="http://twitter.com/transalt" target="_blank" id="twitter">Twitter</a><br><a href="http://flickr.com/transalt" target="_blank" id="flickr">Flickr</a><br><a href="http://youtube.com/transalt" target="_blank" id="youtube">YouTube</a>
        			</td>
        		</tr><tr><td style="vertical-align: top;">
                    	GET INVOLVED
        				<hr style="color: #999999; border: none; height: 1px; background:#999999; "><br><a href="http://bikenyc.org/" target="_blank" id="bikenyc"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/bikenyc.png" style="float: left; padding: 5px;"></a><a href="http://riderrebellion.org/" target="_blank" id="riderrebellion"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/rr.png" style="padding: 5px;"></a><a href="http://crashstat.org/" target="_blank" id="crashstat"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/crashstat.png" style="padding: 5px;"></a><a href="http://bikingrules.org/" target="_blank" id="bikingrules"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/br.png" style="padding: 5px;"></a><a href="http://teamta.org/" target="_blank" id="teamta"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/teamta.png" style="padding: 5px;"></a>
        			</td>
        			<td style="vertical-align: top;">BICYCLE TOURS
        				<hr style="color: #999999; border: none; height: 1px; background:#999999; "><br><a href="./ta-template_files/ta-template.html" target="_blank" id="century"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/century.png" style="float: left; padding: 5px;"></a><a href="http://tourdebrooklyn.org/" target="_blank" id="tourdebrooklyn"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/tdbk.png" style="padding: 5px;"></a><a href="http://tourdequeens.org/" target="_blank" id="tourdequeens"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/queens.png" style="padding: 5px;"></a><a href="http://tourdestatenisland.org/" target="_blank" id="tourdestatenisland"><img src="http://nyccentury.org/sites/all/themes/adaptivetheme/nyccentury_2012/css/images/footer/staten.png" style="padding: 5px;"></a>
        			</td>
        		</tr></tbody></table>
        		
        </div>
    </body>
</html>