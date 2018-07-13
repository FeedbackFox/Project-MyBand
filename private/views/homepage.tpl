<div class="wrapper">


  <div id="homepagecontent">
	<div class="list">
	{foreach from=$homepageposts item=homepagepost}
	<li style="list-style-type: none; margin-top: 3vh;">{$homepagepost}</li><div class="splitcontent"></div>
		{/foreach}
		{if $pageno gt 1}
		<a id="backbutton" href="index.php?page=home&no={$pageno - 1}">Previous page</a>
		{else}
		<a id="backbutton" style="color: gray">Previous page</a>
		{/if}
		<h4 id="pagecounter">Current page: {$pageno}</h4>
		{if $pageno lt $number_of_pages}
		<a id="nextbutton"href="index.php?page=home&no={$pageno + 1}">Next page</a>
		{else}
		<a id="nextbutton" style="color: gray">Next page</a>
		{/if}
	</div>
  </div>
