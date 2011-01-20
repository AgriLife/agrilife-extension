<?php
/**
 * @package WordPress
 * @subpackage Agrilife Extension
 */
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

    <div id="updates">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage_col_1') ) : ?>
		<div id="twitter_div">
		<ul id="twitter_update_list">
			<li class="loading">Loading...</li>
		</ul>
		</div>
		<div id="twittermore"><a href="http://twitter.com/txextension">View past posts...</a></div>
		<script 
		src="<?php echo THEME_TEMPLATEURL;?>/../agrilife-extension/scripts/twitter-1.13.1.js" 
		type="text/javascript">
		</script>
    <?php endif; // col1 ?>
    </div><!-- #updates -->
    <div id="main_content">
      <?php
	$youTube = get_post_meta($post->ID, "youtube", true);
	//Check for well-formed playlist url
	if(stristr($youTube,'http://www.youtube.com/view_play_list?p=')){
		$youTube = 'http://gdata.youtube.com/feeds/api/playlists/'.substr($youTube,40);
	} elseif(stristr($youTube,'http://gdata.youtube.com/feeds/api/playlists/')) {
		$youTube = $youTube;
	} else {
		$youTube = '';
	}
 ?>
      <!--
<?php
$args = array(
	'post_type' => 'attachment',
	'numberposts' => -1,
	'post_status' => null,
	'post_parent' => $post->ID
	); 
$attachments = get_posts($args);
?>
-->
      <?php if (count($attachments) > 0): ?>
      <div>
        <div id="features">
          <?php if($youTube!=''): ?>
          <ul class="tabs" id="featuresnav">
            <li><a class="active" href="#points-of-pride" id="points-of-prive-nav"><img alt="pix" src="<?php echo THEME_TEMPLATEURL;?>/images/tab-slideshow.gif" /></a></li>
            <li><a href="#video-vault" id="video-vault-nav"><img alt="YouTube Videos" src="<?php echo THEME_TEMPLATEURL;?>/images/tab-youtube.gif" /></a></li>
          </ul>
          <?php endif; ?>
          <div class="tab active" id="points-of-pride"> <?php echo do_shortcode('[gallery_home]'); ?>
            <?php if (count($attachments) > 1): ?>
            <div class="pics-nav">
              <div id="prev">Previous</div>
              <div id="next">Next</div>
            </div>
            <?php endif; ?>
          </div>
          <?php if($youTube!=''): ?>
          <div class="tab" id="video-vault">
            <script type="text/javascript" src="<?php echo THEME_TEMPLATEURL;?>/scripts/swfobject.js"></script>
            <div id="player">You will need <a href="http://www.google.com/url?sa=t&source=web&cd=1&ved=0CBsQFjAA&url=http%3A%2F%2Fget.adobe.com%2Fflashplayer%2F&ei=XwhOTPqRHcmenwfTm6zZCw&usg=AFQjCNFV-EC-o0osKJm2dFwEBoUMPY6T2g&sig2=p-YajqU82tbiFG3tiaNnZQ">Adobe's Flash player</a> to view this content.</div>
            <script type="text/javascript">
				  var so = new SWFObject('<?php echo THEME_TEMPLATEURL;?>/media/player.swf','mpl','585','305','9');
				  so.addParam('allowscriptaccess','always');
				  so.addParam('allowfullscreen','true');
				  so.addVariable('file','<?php echo $youTube; ?>');
				  so.addVariable('skin','<?php echo THEME_TEMPLATEURL;?>/media/modieus.swf');
				  so.addVariable('playlist','over');
				  so.addVariable('frontcolor','#cfceb9');
				  so.write('player');
				  </script>
          </div>
          <!-- .tab -->
          <?php endif; ?>
        </div>
        <!-- #features-->
      </div>
      <?php endif; ?>
    </div> <!-- #maincontent -->
    <div class="clear"></div>
  </div>
  <div id="topicsshadow">
    <div id="topicsshadow-light">
      <div id="topicsshadow-med">
        <div id="topicsshadow-dark">
          <div id="topics">
            <div id="topics-box">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage_col_2') ) : ?>
                <div id="topics-action">
                	<h3>Extension Topics</h3>
                	<div><a class="thickbox" href="http://agrilife.tamu.edu/topics-window/?KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600" title="Topics">View All Topics</a></div>                  
                </div>
                <div id="topics-scroll">
                  <div id="topics-scroll-box">
					<ul>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/youth_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/4-h/" title="">4-H and Youth Dev. Programs</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/environment_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/agriculture/" title="">Agriculture and Natural Resources</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/family_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/family/" title="">Family and Home</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/field_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/fieldcrops/" title="">Field Crops</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/food_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/food/" title="">Food and Nutrition</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/health_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/health/" title="">Health and Safety</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/insect_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/insects/" title="">Insects and Pest Management</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/garden_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/lawngarden/" title="">Lawn and Garden</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/livestock_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/livestock/" title="">Livestock</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/disasters_thumb.jpg" title="" /><a href="http://eden.tamu.edu">Natural Disasters</a></li>
						<li><img alt="" src="http://agrilife.presscdn.com/extension/files/images/topics/programs_thumb.jpg" title="" /><a href="http://agrilifeextension.tamu.edu/topics/edprograms/" title="">Educational Programs</a></li>
					</ul>
                  </div>
                </div>
              <?php endif; // col2 ?>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modules">
    <div id="modules-box">
      <div id="news">
        <div id="news-box">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage_col_3') ) : ?>
            <div id="news-scroll">
            <ul>
              <li><a href="http://agrilifeextension.tamu.edu/news/1-2011-parker.php" title="">Entomologist: Producers be mindful of proper grain storage sanitation practices</a></li>
              <li><a href="http://agrilifeextension.tamu.edu/news/12-2010-ansc.php" title="">Animal Science Students and Alumni Honored</a></li>
              <li><a href="http://agrilifeextension.tamu.edu/news/12-2010-graduation.php" title="">More than 3,500 graduating in December commencement</a></li>
              <li><a href="http://agrilifeextension.tamu.edu/news/12-2010-brazil.php" title="">Joint TAMU, Prairie View course to explore agricultural, cultural diversity in Brazil</a></li>
              <li><a href="http://agnews.tamu.edu/showstory.php?id=2289">Borlaug Institute helping beef up Ecuador's cattle industry</a></li>
              <li><a href="http://agnews.tamu.edu/showstory.php?id=2287">Ag college groundbreaking plants seeds for Afghan agriculture</a></li>
              <li><a href="http://agrilifeextension.tamu.edu/news/12-2010-awards.php" title="">Six honored by system, university, with Regents Fellows and Presidential Meritorious Awards</a></li>
              <li><a href="http://agnews.tamu.edu/showstory.php?id=2277">USAID awards international ag project to Texas A&amp;M AgriLife entities</a></li>
              <li><a href="http://insects.tamu.edu/feature/boatman_ipminternship/">Internship with pecans helps student find career path</a></li>
              <li><a href="http://insects.tamu.edu/podcast/Bug_Bytes_Site/Podcast/Entries/2010/11/19_Ode_to_the_Microscope.html">Ode To The Microscope</a></li>
              <li><a href="http://agrilifeextension.tamu.edu/news/11-2010-agrileader_iraq.php" title="">How Aggies are saving lives one seed at a time</a></li>
              <li><a href="http://agrilifeextension.tamu.edu/news/11-2010-kieval.php" title="">Hands-On: Steven Kieval '11</a></li>
            </ul>
          	</div>
          <?php endif; // col3 ?>
        </div>
        <div id="news-links">
			<a href="http://agnews.tamu.edu/search/">Search</a> | 
			<a href="http://agnews.tamu.edu/contact/">Media Contacts</a> | 
			<a href="http://agnews.tamu.edu/">All News</a> 
		</div>
      </div>
      <div id="about">
        <div id="about-box"> 
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        	<?php the_content(); ?>
        </div>
        <?php  endwhile; endif; ?>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
getTwitters('twitter_div', { 
  id: 'txextension', 
  count: 3, 
  enableLinks: true, 
  ignoreReplies: true, 
  clearContents: true,
  template: '%text%'
});
</script>
<?php get_footer(); ?>
