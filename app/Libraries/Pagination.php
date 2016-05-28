<?php 
namespace App\Libraries;
use Landish\Pagination\SemanticUI;

// Uncomment bellow line, if you like to use "Simple Pagination"
// use Landish\Pagination\Simple\SemanticUI;

class Pagination extends SemanticUI {
    
    protected $paginationWrapper = '<ul>%s %s %s</ul>';

    protected $availablePageWrapper = '<li class="%s"><a href="%s">%s</a></li>';

    protected $activePageWrapper = '<li class="active"><a>%s</a></li>';

    protected $disabledPageWrapper = '<li class="%s"><a>%s</a></li>';

    protected $previousButtonText = '&lt; PREVIOUS';

    protected $nextButtonText = 'NEXT &gt;';

    protected $dotsText = '...';     
    
    protected function getPreviousButton()
    {
        // If the current page is less than or equal to one, it means we can't go any
        // further back in the pages, so we will render a disabled previous button
        // when that is the case. Otherwise, we will give it an active "status".
        if ($this->paginator->currentPage() <= 1) {
            //return $this->getDisabledTextWrapper($this->getPreviousButtonText(), 'prev');
            return '';
        }

        $url = $this->paginator->url(
            $this->paginator->currentPage() - 1
        );

        return $this->getPageLinkWrapper($url, $this->getPreviousButtonText(), 'prev');
    }
    
    protected function getNextButton()
    {
        // If the current page is greater than or equal to the last page, it means we
        // can't go any further into the pages, as we're already on this last page
        // that is available, so we will make it the "next" link style disabled.
        if (!$this->paginator->hasMorePages()) {
            return '';
            //return $this->getDisabledTextWrapper($this->getNextButtonText(), 'next');
        }

        $url = $this->paginator->url($this->paginator->currentPage() + 1);

        return $this->getPageLinkWrapper($url, $this->getNextButtonText(), 'next');
    }
    
    protected function getPageLinkWrapper($url, $page, $class='')
    {
        if ($page == $this->paginator->currentPage())
        {
            return $this->getActivePageWrapper($page);
        }

        return $this->getAvailablePageWrapper($url, $page, $class);
    }
    
    protected function getAvailablePageWrapper($url, $page, $class='')
    {
        return sprintf($this->getAvailablePageWrapperHTML(), $class, $url, $page);
    }
    
    protected function getDisabledTextWrapper($text, $clsss='')
    {
        return sprintf($this->getDisabledPageWrapperHTML(), $clsss, $text);
    }
}