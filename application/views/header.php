<header>
	
	<div class="logo">
		<a href="/">HTML ebay</a>
	</div>
	
	<ul class="top_nav">

		<li><?=  anchor('app/my_html/', 'Mis plantillas', '') ?></li>
		<li class="green"><?=  anchor('app/html/'.$this->uri->segment(3), 'Crear plantilla', '') ?></li>

		<!--<li class="multi">
			<a href="javascript:void(0);">Share</a>

			<ul class="share_box dropdown" style="top: 44px; opacity: 0; display: none;">
				<!--<li>
					<label for="share_url">Link</label>
					<input type="url" id="share_url"
					value="http://cssdeck.com/labs/large-pressable-css3-navigation" onclick="this.select();">
				</li>
				<li>
					<label for="share_full_url">Full Screen Result</label>
					<input type="url" onclick="this.select();" value="http://cssdeck.com/labs/full/large-pressable-css3-navigation" id="share_full_url">
				</li>
				<li>
					<label for="embed_url">Embed on your webpage (blogs, articles, etc.)</label>
					<input type="url" onclick="this.select();" value="&lt;pre class=&quot;_cssdeck_embed&quot; data-pane=&quot;output&quot; data-user=&quot;devilsbackyard&quot; data-href=&quot;large-pressable-css3-navigation&quot; data-version=&quot;0&quot;&gt;&lt;/pre&gt;&lt;script async src=&quot;http://cssdeck.com/assets/js/embed.js&quot;&gt;&lt;/script&gt;" id="embed_url">
				</li>
								<li class="share-links">
					<a target="_blank" href="http://twitter.com/share?text=Large+Pressable+CSS3+Navigation&amp;via=cssdeck">
						<i class="icon-twitter-sign"></i>
					</a>
					|
					<a target="_blank" href="http://facebook.com/share.php?s=100&amp;p[title]=Large+Pressable+CSS3+Navigation&amp;p[url]=http://cssdeck.com/labs/large-pressable-css3-navigation">
						<i class="icon-facebook-sign"></i>
					</a>
					|
					<a target="_blank" href="https://plus.google.com/share?url=http://cssdeck.com/labs/large-pressable-css3-navigation">
						<i class="icon-google-plus-sign"></i>
					</a>
				</li>
			</ul>
		</li>-->
		
	</ul>

	<ul class="extra">
		<!-- Nav -->
		
		<?php if ($this->uri->segment(2) == 'html'): ?>

			<li><a id="html" dir="savehtml_600_200" title="Guardar" class="icons slash modal_form" href="#"><i class="fa fa-floppy-o"></i></a></li>
			
			<?php if($html->state == 1): ?>
				
				<li><a class="icons off slash" title="Descargar" href="#"><i class="fa fa-download"></i></a></li>
				
				<li><a class="icons off slash" title="Guardar como" href="#"><i class="fa fa-paste"></i></a></li>
			
			<?php else: ?>
				
				<li><?=  anchor('app/download_html/'.$id_template.'/'.$id_html, '<i class="fa fa-download"></i>','title="Descargar" class="icons slash"') ?></li>

				<li><?=  anchor('app/html/0/'.$id_html, '<i class="fa fa-paste"></i>','title="Guardar como" class="icons slash"') ?></li>

			<?php endif; ?>
			
			<li><a id="style" dir="style_600_580" title="Estilo" class="icons slash modal_form" href="#"><i class="fa fa-paint-brush"></i></a></li>
			
			<li><a id="eye" class="icons" title="Previsualizar" href="#"><i class="fa fa-eye"></i></a></li>
		
		<?php endif ?>

		<li><?=  anchor('login/logout', '<i class="fa fa-power-off"></i>','title="Cerrar sesión" class="icons"') ?></li>
		
	</ul>	

	
</header>
