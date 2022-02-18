import { mapState, mapActions, mapGetters, mapMutations } from 'vuex'
export default {
  layout: 'customersPages',
  name: 'Shop',
  components: {},

  mounted() {
    this.dataFetched ? console.log('data fetched') : this.fetch()
  },

  data: () => ({
    sorts: [
      'Best Selling',
      'New Arrivals',
      'Price Low To Height',
      'Price Height To Low',
    ],

    localPage: 1,
  }),

  methods: {
    ...mapActions(
      'shop',

      ['fetch', 'updatePage']
    ),

    ...mapMutations(
      'shop',

      [
        'resetCategoriesFilter',
        'resetPricesFilter',
        'assignPriceData',
        'resetBrandsFilter',
        'resetTagsFilter',
        'resetSizesFilter',
        'resetColorsFilter',
        'addActiveCategory',
        'addActiveSubCategory',
        'addActiveBrand',
        'addActiveTag',
        'addActiveSize',
        'addActiveColor',
        'sortProducts',
        'applyPriceFilter',
      ]
    ),

    getFilteredTags() {
      let tags = []

      this.filteredProducts.forEach((product) => {
        product.tags.forEach((tag) => {
          tags.push(tag)
        })
      })

      let cleanTags = tags.reduce(function (p, c) {
        if (
          !p.some(function (el) {
            return el.id === c.id
          })
        )
          p.push(c)
        return p
      }, [])

      return cleanTags
    },

    getProductState(item) {
      return item.selling_price > 600
        ? "<span class = 'stockout-label'> Out of stock </span>  "
        : "<span class = 'sale-label'> Sale </span>  "
    },

    setPriceData(fieldType, value) {
      let objectData = {
        type: fieldType,
        event: value,
      }

      this.assignPriceData(objectData)
    },

    goToProductDetails(product) {
      this.$router.push({
        name: 'products-slug',
        params: { slug: product.slug },
      })
    },

    localSortProducts($event) {
      this.sortProducts($event)
      this.clearPagination()
    },

    localFilterData(type, item) {
      if (type === 'category') {
        this.addActiveCategory(item)
      } else if (type === 'subCategory') {
        this.addActiveSubCategory(item)
      } else if (type === 'brand') {
        this.addActiveBrand(item)
      } else if (type === 'tag') {
        this.addActiveTag(item)
      } else if (type === 'size') {
        this.addActiveSize(item)
      } else if (type === 'color') {
        this.addActiveColor(item)
      } else if (type === 'price') {
        this.applyPriceFilter()
      }

      this.clearPagination()
    },

    localResetFilterData(type) {
      if (type === 'category' || type === 'subCategory') {
        this.resetCategoriesFilter()
      } else if (type === 'brand') {
        this.resetBrandsFilter()
      } else if (type === 'tag') {
        this.resetTagsFilter()
      } else if (type === 'size') {
        this.resetSizesFilter()
      } else if (type === 'color') {
        this.resetColorsFilter()
      } else if (type === 'price') {
        this.resetPricesFilter()
      }

      this.clearPagination()
    },

    localUpdatePage() {
      this.updatePage(this.localPage)
    },

    clearPagination() {
      this.updatePage(1)
      this.localPage = 1
    },
  },

  computed: {
    ...mapState(
      'shop',

      [
        'categories',
        'brands',
        'tags',
        'sizes',
        'colors',
        'products',
        'totalProductsNumber',
        'filter',
        'loading',
        'cardsLoading',
        'dataFetched',
        'myPage',
        'paginatedProducts',
      ]
    ),

    ...mapGetters(
      'shop',

      [
        'filteredProducts',
        'canResetCategoriesFilter',
        'canResetSizesFilter',
        'canResetColorsFilter',
        'isSubCategoryActive',
        'isBrandActive',
        'isSizeActive',
        'isColorActive',
        'isTagActive',
        'canResetBrandsFilter',
        'canResetTagsFilter',
        'canResetPricesFilter',
        'pages',
        'isCategoryActive',
        'pages',
      ]
    ),
  },
}
