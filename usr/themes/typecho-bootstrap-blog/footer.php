<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<a class="to-top" style="z-index: 1200;">
    <img src="<?php  $this->options->themeUrl('img/top.svg')?>" alt="返回顶部" title="返回顶部">
</a>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <footer id="footer" role="contentinfo">
                <div class="mb-3" style="display: inline-block;">
                    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
                    <?php if($this->options->postbirdIcp){ ?>
                        <a target="_blank" href="//www.miitbeian.gov.cn"><?php $this->options->postbirdIcp(); ?></a> .
                    <?php }  ?>
                    <?php _e('由 <a href="http://www.typecho.org"  target="_blank">Typecho</a> 强力驱动'); ?>.
                    <?php _e('Theme by  <a href="http://www.ptbird.cn" target="_blank">Postbird</a>'); ?>.
                </div>
                <div class="ml-5" style="display: inline-block;">
                    <img src="/qrcode.jpg" width="150">
                    <img class="ml-3" src="/miniprogram.png" width="150">
                </div>
            </footer><!-- end #footer -->
        </div>
    </div>
</div>

<?php $this->footer(); ?>
</body>
<!-- 用户自定义脚本内容 -->
<?php if($this->options->postbirdScript) { ?>
    <?php $this->options->postbirdScript() ?>
<?php } ?>
</html>
