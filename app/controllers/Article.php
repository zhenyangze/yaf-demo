<?php
/**
* @file application/controllers/Article.php
*
* @author zhenyangze
* @mail   zhenyangze@gmail.com
* @time   日  4/23 23:47:05 2017
*/
class articleController extends \Core\Controller_AbstractIndex
{
    public function detailAction()
    {
        $categoryId = $this->getRequest()->getParam("categoryID", 0);
        $articleId = $this->getRequest()->getParam("articleID", 0);
        echo "article:detail";
        print_r([
            'categoryId' => $categoryId,
            'articleId' => $articleId,
        ]);
        exit;
    }
}
