<section class="search p-1 mt-2">
        <div class="search__content container">

            <form role="search" method="get" action="<?= home_url('/') ?>" id="searchform" class="search__form">
                <input type="search" placeholder="Looking for Something?" value="<?= get_search_query() ?>" title="search" name="s" id="s" />
                <button type="submit" id="searchSubmit">Search</button>
            </form>

        </div>
</section>