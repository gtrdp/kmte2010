			<?php
				global $url;
				for($i=0;$i<count($url);$i++) {
					if (is_numeric($url[$i])) {
						$postid = $url[$i];
						break;
					}
				}
				
				if ($url[0]=="member") $type = "staff";
				else $type = "post";
				
				if ($_POST["feedback"]<>"") {
					$author = $_POST["author"];
					$email = $_POST["email"];
					$content = $_POST["content"];
					
					if (strlen($author)<5) alert("Author minimum 5 characters");
					elseif (strlen($email)<5) alert("Invalid email address");
					elseif (strlen($content)<5) alert("Feedback too short");
					else {
						mysql_query("insert into feedback values (null,null,$postid,'$type','$author','$email','$content') ");
						comment_notif($postid);
						alert("Thanks for your feedback !!!");
					}
					
				}
				
				$query = mysql_query("select * from feedback where postid = $postid and type='$type'");?>
				
				<?php if(mysql_affected_rows()>0):?>
				<div id="feedback">
			<img src="<?php echo HOME;?>/images/feedback.jpg" /><br class="clear" />
				<?php endif;?>
				
			<?php	
				while ($result = @mysql_fetch_object($query)):
				
			?>
			<div class="content">
				<img src="<?php echo gravatar($result->email);?>" class="images" />
				<h1><?php echo $result->author;?></h1>
				<span class="date">[ <?php echo $result->date;?> ]</span>
				<p><?php echo $result->content;?></p>
				<br class="clear"/>
			</div>
			<?php endwhile;?>
			
			<?php if(mysql_affected_rows()>0):?>
			<br class="clear" />
		</div>
		<?php endif;?>
		
		<div id="give-feedback">
			<img src="<?php echo HOME;?>/images/give-feedback.jpg" /><br class="clear" />
			<form method="post">
			<table>
				<tr><td><span class="feedback">Name</span></td><td>: <input name="author" type="text" id="author" size="30" /></td></tr>
				<tr><td><span class="feedback">e-mail</span></td><td>: <input name="email" type="text" id="email" size="30" /></td></tr>
				<tr><td colspan="2"><span class="feedback">Feedback:</span></td></tr>
				<tr><td colspan="2"><textarea name="content" cols="60" rows="7" id="content" ></textarea></td></tr>
			</table>
			<br />
			<input type="submit" value="Submit" id="tombol" name="feedback"/>
			</form>
			<br class="clear"/>
		</div>