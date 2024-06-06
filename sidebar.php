<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
<ul class="nav navbar-nav side-nav nicescroll-bar">
    <?php foreach (get_menu() as $key => $module) : ?>
        <li class="navigation-header">
            <span><?= __($module['moduleName'] . '.menu.module_name') ?></span>
            <hr />
        </li>
        <?php foreach ($module['menu'] as $k => $menu) : ?>
            <li class="<?= getActive() == $menu['activeState'] ? 'active' : '' ?>">
                <?php if (isset($menu['items'])) : ?>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#<?= __($menu['label']) ?>_dr">
                <?php else : ?>
                    <a href="<?= $menu['route'] ?>">
                <?php endif ?>
                    <div class="pull-left"><i class="<?=$menu['icon'];?> mr-20"></i><span class="right-nav-text"><?= __($menu['label']) ?></span></div>
                    <?php if (isset($menu['items'])) : ?>
                        <div class="pull-right"><i class="ti-angle-down"></i></div>
                    <?php endif ?>
                    <div class="clearfix"></div>
                </a>

                <?php if (isset($menu['items'])) : ?>
                    <ul id="<?= __($menu['label']) ?>_dr" class="collapse collapse-level-1">
                        <?php foreach ($menu['items'] as $item) : ?>
                            <li>
                                <a href="<?= $item['route'] ?>">
                                    <div class="pull-left"><span><?= __($item['label']) ?></span></div>
                                    <?php if (isset($item['badge'])) : ?>
                                        <div class="pull-right"><span class="label label-success"><?= $item['badge'] ?></span></div>
                                    <?php endif ?>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    <?php endforeach ?>
</ul>
</div>
<!-- /Left Sidebar Menu -->