<div class="pagination-wrapper mt-5 pt-lg-3">
    <ul class="page-pagination">
        <li><a wire:click="resetPage()"><span aria-current="page" class="page-numbers current">1</span></a></li>
        <li><a class="next" wire:click="previousPage()"><span class="fa fa-angle-left"> Prev</span></a></li>
        <li><a class="next" wire:click="nextPage()">Next <span class="fa fa-angle-right"></span></a></li>
    </ul>
</div>