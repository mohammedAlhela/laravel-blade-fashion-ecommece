

export default {
  namespaced: true,

  state() {
    return {
      loading: true,
      cardsLoading: false,
      products: [],
      totalProductsNumber: 0,
      brands: [],
      tags: [],
      sizes: [],
      colors: [],
      categories: [],
      dataFetched: false,

      filter: {
        openedCategoryIndex: null,
        brand: {
          id: '',
          name: '',
        },

        defaultBrand: {
          id: '',
          name: '',
        },

        tags: [],
        colors: [],
        sizes: [],

        category: {
          id: '',
          name: '',
        },

        subCategory: {
          id: '',
          name: '',
        },

        defaultCategory: {
          id: '',
          name: '',
        },

        defaultSubCategory: {
          id: '',
          name: '',
        },

        minPrice: '',
        maxPrice: '',

        exactMinPrice: '',
        exactMaxPrice: '',

        resetSize: '',
        resetColor: '',
      },

      // pagination
      myPage: 1,
      myPageSize: 8,
      paginatedProducts: [],
    }
  },

  mutations: {
    closeLoader: (state) => {
      state.loading = false
      state.dataFetched = true
    },

    assignApiData: (state, response) => {
      state.products = response.data.products
      state.totalProductsNumber = response.data.products.length
      state.categories = response.data.categories
      state.brands = response.data.brands
      state.tags = response.data.tags
      state.sizes = response.data.sizes
      state.colors = response.data.colors
      state.products.forEach((item) => {
        item.created_at = new Date(item.created_at)
      })
    },

    assignPriceData: (state, dataObject) => {
      if (dataObject.type === 'minPrice') {
        state.filter.minPrice = dataObject.event
      } else {
        state.filter.maxPrice = dataObject.event
      }
    },

    resetCategoriesFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        state.filter.openedCategoryIndex = null
        state.filter.category = Object.assign({}, state.filter.defaultCategory)
        state.filter.subCategory = Object.assign(
          {},
          state.filter.defaultSubCategory
        )
      }, 1200)
    },

    resetPricesFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        state.filter.maxPrice = ''
        state.filter.minPrice = ''
        state.filter.exactMaxPrice = ''
        state.filter.exactMinPrice = ''
      }, 1200)
    },

    resetSizesFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        state.filter.sizes = []
        state.filter.resetSize = ''
      }, 1200)
    },

    resetColorsFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        state.filter.colors = []
        state.filter.resetColor = ''
      }, 1200)
    },

    resetBrandsFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false

        state.filter.brand = Object.assign({}, state.filter.defaultBrand)
      }, 1200)
    },
    resetTagsFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false

        state.filter.tags = []
      }, 1200)
    },

    addActiveCategory: (state, category) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        state.filter.category = Object.assign({}, category)

        let index

        index = state.categories.findIndex((item) => {
          return item.id === category.id
        })

        console.log(index)
        state.filter.openedCategoryIndex = index
      }, 1200)
    },

    addActiveBrand: (state, brand) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        state.filter.brand = Object.assign({}, brand)
      }, 1200)
    },

    addActiveSize: (state, size) => {
      let index = state.filter.sizes.indexOf(size)
      state.cardsLoading = true
      if (index === -1) {
        setTimeout(() => {
          state.cardsLoading = false
          state.filter.sizes.push(size)
        }, 1200)
      } else {
        setTimeout(() => {
          state.cardsLoading = false
          state.filter.sizes.splice(index, 1)
        }, 1200)
      }
    },

    addActiveColor: (state, color) => {
      let index = state.filter.colors.indexOf(color)
      state.cardsLoading = true
      if (index === -1) {
        setTimeout(() => {
          state.cardsLoading = false
          state.filter.colors.push(color)
        }, 1200)
      } else {
        setTimeout(() => {
          state.cardsLoading = false
          state.filter.colors.splice(index, 1)
        }, 1200)
      }
    },

    addActiveTag: (state, tag) => {
      let index = state.filter.tags.indexOf(tag)
      state.cardsLoading = true
      if (index === -1) {
        setTimeout(() => {
          state.cardsLoading = false
          state.filter.tags.push(tag)
        }, 1200)
      } else {
        setTimeout(() => {
          state.cardsLoading = false
          state.filter.tags.splice(index, 1)
        }, 1200)
      }
    },

    addActiveSubCategory: (state, subCategory) => {
      state.cardsLoading = true

      setTimeout(() => {
        state.filter.category = Object.assign({}, state.filter.defaultCategory)
        state.cardsLoading = false
        state.filter.subCategory = Object.assign({}, subCategory)
      }, 1200)
    },

    sortProducts: (state, type) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        if (type == 'Price Low To Height') {
          state.products = state.products.slice().sort(function (a, b) {
            return a.exact_price - b.exact_price
          })
        } else if (type == 'Price Height To Low') {
          state.products = state.products.slice().sort(function (a, b) {
            return b.exact_price - a.exact_price
          })
        } else if (type == 'Best Selling') {
          state.products = state.products.slice().sort(function (a, b) {
            return b.orders_number - a.orders_number
          })
        } else if (type == 'New Arrivals') {
          state.products = state.products.slice().sort(function (a, b) {
            return b.created_at - a.created_at
          })
        }
      }, 1200)
    },
    applyPriceFilter: (state) => {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false

        state.filter.exactMaxPrice = state.filter.maxPrice
        state.filter.exactMinPrice = state.filter.minPrice
      }, 1200)
    },
  },

  getters: {
    canResetCategoriesFilter: (state) => {
      return state.filter.category.id || state.filter.subCategory.id
    },

    canResetSizesFilter: (state) => {
      return state.filter.sizes.length
    },

    canResetColorsFilter: (state) => {
      return state.filter.colors.length
    },

    canResetPricesFilter: (state) => {
      return state.filter.exactMaxPrice || state.filter.exactMinPrice
    },

    canResetBrandsFilter: (state) => {
      return state.filter.brand.id
    },

    canResetTagsFilter: (state) => {
      return state.filter.tags.length
    },

    filteredProducts: (state, getters) => {
      let conditions = []

      if (state.filter.category.id) {
        conditions.push(getters.filterCategory)
      }

      if (state.filter.subCategory.id) {
        conditions.push(getters.filterSubCategory)
      }

      if (state.filter.sizes.length) {
        conditions.push(getters.filterSize)
      }

      if (state.filter.colors.length) {
        conditions.push(getters.filterColor)
      }

      if (state.filter.brand.id) {
        conditions.push(getters.filterBrand)
      }

      if (state.filter.tags.length) {
        conditions.push(getters.filterTag)
      }

      if (state.filter.exactMinPrice && state.filter.exactMaxPrice) {
        conditions.push(getters.filterRangePrice)
      }

      if (state.filter.exactMinPrice && !state.filter.exactMaxPrice) {
        conditions.push(getters.filterMinPrice)
      }

      if (!state.filter.exactMinPrice && state.filter.exactMaxPrice) {
        conditions.push(getters.filterMaxPrice)
      }

      if (conditions.length > 0) {
        return state.products.filter((product) => {
          return conditions.every((condition) => {
            return condition(product)
          })
        })
      }

      return state.products
    },

    filterCategory: (state) => (item) => {
      return (item.category_id + '')
        .toString()
        .includes(state.filter.category.id)
    },

    filterSubCategory: (state) => (item) => {
      return (item.sub_category_id + '')
        .toString()
        .includes(state.filter.subCategory.id)
    },

    filterTag: (state) => (item) => {
      let productTags = item.tags
      let activeTags = state.filter.tags
      let productIsExist = 0

      productTags.forEach((item) => {
        activeTags.forEach((activeTag) => {
          item.name === activeTag.name ? (productIsExist = true) : ''
        })
      })

      console.log(productIsExist)

      return productIsExist
    },

    filterSize: (state) => (item) => {
      let productSizes = item.relatedSizes
      let activeSizes = state.filter.sizes
      let productIsExist = 0

      productSizes.forEach((item) => {
        activeSizes.forEach((activeSize) => {
          item.name === activeSize.name ? (productIsExist = true) : ''
        })
      })

      console.log(productIsExist)

      return productIsExist
    },

    filterColor: (state) => (item) => {
      let productColors = item.relatedColors
      let activeColors = state.filter.colors
      let productIsExist = 0

      productColors.forEach((item) => {
        activeColors.forEach((activeColor) => {
          item.name === activeColor.name ? (productIsExist = true) : ''
        })
      })

      console.log(productIsExist)

      return productIsExist
    },

    filterBrand: (state) => (item) => {
      return (item.brand_id + '').toString().includes(state.filter.brand.id)
    },

    isSubCategoryActive: (state) => (subCategory) => {
      return state.filter.subCategory.id === subCategory.id
    },

    isCategoryActive: (state) => (category) => {
      return state.filter.category.id === category.id
    },

    isBrandActive: (state) => (brand) => {
      return state.filter.brand.id === brand.id
    },

    isTagActive: (state) => (tagObject) => {
      let resultTruth = false

      state.filter.tags.findIndex(function (tag) {
        tag.id == tagObject.id ? (resultTruth = true) : ''
      })

      return resultTruth
    },

    isSizeActive: (state) => (sizeObject) => {
      let resultTruth = false

      state.filter.sizes.findIndex(function (size) {
        size.id == sizeObject.id ? (resultTruth = true) : ''
      })

      return resultTruth
    },

    isColorActive: (state) => (colorObject) => {
      let resultTruth = false

      state.filter.colors.findIndex(function (color) {
        color.id == colorObject.id ? (resultTruth = true) : ''
      })

      return resultTruth
    },

    filterRangePrice: (state) => (item) => {
      return (
        item.exact_price + '' >= parseInt(state.filter.exactMinPrice) &&
        item.exact_price + '' <= parseInt(state.filter.exactMaxPrice)
      )
    },

    filterMinPrice: (state) => (item) => {
      return item.exact_price + '' >= parseInt(state.filter.exactMinPrice)
    },

    filterMaxPrice: (state) => (item) => {
      return item.exact_price + '' <= parseInt(state.filter.exactMaxPrice)
    },

    // pagination
    pages: (state, getters) => {
      if (state.myPageSize == null || getters.filteredProducts.length === 0) {
        return 0
      }
      return Math.ceil(getters.filteredProducts.length / state.myPageSize)
    },
  },

  actions: {
    async fetch({ state, commit, dispatch }) {
      try {
        const DATA = await axios
          .get('/shop/fetchData')
          .then((response) => {
            commit('assignApiData', response)
            dispatch('initPage')
            dispatch('updatePage', state.myPage)
            commit('closeLoader')

            console.log(response.data)
          })
      } catch (error) {
      console.log(error)


      }
    },

    async addActiveCategoryFromOutside({ state, commit, dispatch }, category) {
      if (!state.categories.length) {
        const Data = await dispatch('fetch')

        console.log(' there is no data iw ill fetch and the add the active')

        commit('addActiveCategory', category)
      } else {
        commit('addActiveCategory', category)
        console.log(' i will add the active')
      }
    },

    initPage({ state, getters }) {
      state.paginatedProducts = getters.filteredProducts.slice(
        0,
        state.myPageSize
      )
    },

    updatePage({ state, getters }, index) {
      state.cardsLoading = true
      setTimeout(() => {
        state.cardsLoading = false
        let myStart = (index - 1) * state.myPageSize
        let myEnd = index * state.myPageSize
        state.paginatedProducts = getters.filteredProducts.slice(myStart, myEnd)
        state.myPage = index
      }, 1200)
    },
  },
}
