<header id="header">
  <div class="container">
    <?php print render($page['header']) ?> 
  </div>
</header>

<nav id="main-menu">
  <div class="container">
    <?php print render($page['main_menu']); ?>
  </div>
</nav>

<main id="main">  
  <div class="container">   
    <?php print $messages; ?>  
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>  
    <div id="content">      
      <div id="content-main">         
        <?php print render($page['content']); ?>
      </div>
      <div id="content-right">
        <?php if ($page['breadcrumb']): ?>
          <nav id="breadcrumb">
            <?php print render($page['breadcrumb']); ?>
          </nav>
        <?php endif; ?>
        <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php if ($page['content_right']): ?><?php print render($page['content_right']); ?><?php endif; ?>
      </div>
    </div>
    <?php if ($page['content_bottom']): ?>
      <div id="content-bottom">
        <?php print render($page['content_bottom']); ?>
      </div>
    <?php endif; ?>  
  </div>
</main>   

<footer id="footer">
  <div class="container">
    <?php print render($page['footer']) ?>
  </div>
</footer>

<div id="mobile-panel">
  <?php print render($page['mobile_panel']) ?>
</div>
