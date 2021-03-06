<!DOCTYPE html>
<html lang="zh-cmn-Hans" prefix="og: http://ogp.me/ns#" class="han-init">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>博客-详情页</title>
    <link rel="stylesheet" href="public/index/css/primer.css">
    <link rel="stylesheet" href="public/index/css/user-content.min.css">
    <link rel="stylesheet" href="public/index/css/octicons.css">
    <link rel="stylesheet" href="public/index/css/collection.css">
    <link rel="stylesheet" href="public/index/css/repo-card.css">
    <link rel="stylesheet" href="public/index/css/repo-list.css">
    <link rel="stylesheet" href="public/index/css/mini-repo-list.css">
    <link rel="stylesheet" href="public/index/css/boxed-group.css">
    <link rel="stylesheet" href="public/index/css/common.css">
    <link rel="stylesheet" href="public/index/css/share.min.css">
    <link rel="stylesheet" href="public/index/css/responsive.css">
    <link rel="stylesheet" href="public/index/css/index.css">
    <link rel="stylesheet" href="public/index/css/iconfont.css">
    <link rel="stylesheet" href="public/index/css/prism.css"></script>

</head>
<body class="">
    <header class="site-header">
        <div class="container">
            <h1><a href="javascript:;"></a></h1>
            <nav class="site-header-nav" role="navigation">
                
                <a href="index.php">返回首页</a>
                
                <a href="javascript:;"></a>
                
                <a href="javascript:;"></a>
                
                <a href="javascript:;"></a>
                
                <a href="javascript:;"></a>
                
                <a href="javascript:;"></a>
                
            </nav>
        </div>
    </header>
    <!-- / header -->
<section>
    <div class="container">
        <div class="columns">
            <div class="column three-fourths">
                <div class="collection-title">
                    <h1 class="collection-header"><?=$cresult[0]['title'];?></h1>
                    <div class="collection-info">
                        <span class="meta-info">
                            <span class="octicon octicon-calendar"></span> <?=$cresult[0]['create_time'];?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / .banner -->
 <section class="container content">
    <div class="columns">
        <div class="column three-fourths">
            <article class="article-content markdown-body">
               <?=$cresult[0]['content'];?>
<p>以上是个人见解，欢迎各位讨论。​<img class="emoji" title=":smile:" alt=":smile:" src="public/index/images/1f604.png" height="20" width="20" align="absmiddle">​</p>

            </article>
            <div class="share">
                <div class="share-component">
                    <a href="javascript:;"></a>
                    <a href="javascript:;"></a>
                    <a href="javascript:;" class="iconfont icon-wechat" target="_blank">
                        <div class="wechat-qrcode">
                            <h4>微信扫一扫：分享</h4>
                            <div class="qrcode">
                                <canvas width="100" height="100"></canvas>
                            </div>
                            <div class="help">
                                <p>微信里点“发现”，扫一下</p>
                                <p>二维码便可将本文分享至朋友圈。</p>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:;"></a>
                    <a href="javascript:;"></a><a href="javascript:;"></a>
                    <a href="javascript:;"></a>
                    <a href="javascript:;"></a>
                    <a href="javascript:;"></a>
                    <a href="javascript:;"></a>
                    <a href="javascript:;"></a>
                </div>
            </div>
            <div class="comment">
                <div class="comments">
    <div id="disqus_thread"></div>
    
    <noscript>Please enable JavaScript to view the &lt;a href="http://disqus.com/?ref_noscript"&gt;comments powered by Disqus.&lt;/a&gt;
</noscript>
</div>
</div>
</div>
        <div class="column one-fourth">
            <h3>Popular Repositories</h3>

            <div class="boxed-group flush" role="navigation">
            <h3>Repositories contribute to</h3>
            <ul class="boxed-group-inner mini-repo-list">
                
                <li class="public source ">
                    <a href="https://github.com/overtrue/wechat" target="_blank" title="overtrue/wechat" class="mini-repo-list-item css-truncate">
                        <span class="repo-icon octicon octicon-repo"></span>
                        <span class="repo-and-owner css-truncate-target">
                            overtrue/wechat
                        </span>
                    </a>
                </li>
                
                <li class="public source ">
                    <a href="https://github.com/EasyWeChat/site" target="_blank" title="EasyWeChat/site" class="mini-repo-list-item css-truncate">
                        <span class="repo-icon octicon octicon-repo"></span>
                        <span class="repo-and-owner css-truncate-target">
                            EasyWeChat/sitedfdgewrtyutrewert
                        </span>
                    </a>
                </li>
                
                <li class="public source ">
                    <a href="https://github.com/laravel/framework" target="_blank" title="laravel/framework" class="mini-repo-list-item css-truncate">
                        <span class="repo-icon octicon octicon-repo"></span>
                        <span class="repo-and-owner css-truncate-target">
                            laravel/framework
                        </span>
                    </a>
                </li>
                
                <li class="public source ">
                    <a href="https://github.com/caouecs/Laravel-lang" target="_blank" title="caouecs/Laravel-lang" class="mini-repo-list-item css-truncate">
                        <span class="repo-icon octicon octicon-repo"></span>
                        <span class="repo-and-owner css-truncate-target">
                            caouecs/Laravel-lang
                        </span>
                    </a>
                </li>
                
            </ul>
</div>

        </div>
    </div>

</section>
<div style="width:700px;margin-left:172px;">
    <?php if(!empty($op)):?>
    <?php foreach($op as $ob):?>
    <div style="height:80px;border-bottom:1px dashed #A99AC6">
    <p style="color:#1B719B">用户:<?=$ob['username'];?></p>
    <p style="color:#1B719B">评论:<?=$ob['cont'];?></p>
    </div>

    <?php endforeach;?>
    <?php endif;?>
</div>
<div style="margin-left:172px;">
    <form action ="index.php?m=index&c=detail&a=pinsert" method="post">
        <textarea style="display:block;margin-top:0px; float:left;" rows="8" cols="30" name="neirong"></textarea><img style="display:block; float:left;" src="public/index/images/tu.png"><br/>
        <input type="hidden" name="bid" value="<?=$bid;?>">
        <input style="display:block;clear:both;" type="submit" value="发表评论">
    </form>
</div>
<!-- /section.content -->
    <footer class="container" style="clear:both;">
        <div class="site-footer" role="contentinfo">
            <div class="copyright left mobile-block">
                    © 2015
                    <span title="overtrue.me">overtrue.me</span>
                    <a href="javascript:;"></a>
            </div>

            <ul class="site-footer-links right mobile-hidden">
                <li>
                    <a href="javascript:;"></a>
                </li>
            </ul>
            <a href="https://github.com/overtrue/overtrue.github.io" target="_blank" aria-label="view source code">
                <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
            </a>
            <ul class="site-footer-links mobile-hidden">
                
                <li>
                    <a href="javascript:;">1</a>
                </li>
                
                <li>
                    <a href="javascript:;"></a>
                </li>
                
                <li>
                    <a href="javascript:;"></a>
                </li>
                
                <li>
                    <a href="javascript:;"></a>
                </li>
                
                <li>
                    <a href="javascript:;"></a>
                </li>
                
                <li>
                    <a href="javascript:;"></a>
                </li>
                
            </ul>

        </div>
    </footer>
    <!-- / footer -->
</body>
</html>