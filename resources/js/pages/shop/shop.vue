<template>
    <div id="app">
        <v-app>
            <v-main>
                <div class="shop-container">
                    <transition name="fade">
                        <div class="tow-sections-father">
                            <!--categories -->
                            <div class="filter-section">
                                <!--categories -->
                                <div class="categories-filter">
                                    <div class="header-holder">
                                        <span>Categories </span>
                                    </div>

                                    <span
                                        class="reset-holder"
                                        v-if="canResetCategoriesFilter"
                                        @click="
                                            localResetFilterData('category')
                                        "
                                    >
                                        <v-icon class="icon">mdi-cached</v-icon>

                                        <span class="header"> Reset</span>
                                    </span>

                                    <div class="clearing"></div>

                                    <v-expansion-panels
                                        accordion
                                        v-model="filter.openedCategoryIndex"
                                    >
                                        <v-expansion-panel
                                            v-for="(
                                                category, index
                                            ) in categories"
                                            :key="index"
                                        >
                                            <v-expansion-panel-header>
                                                <span>
                                                    <span
                                                        class="category"
                                                        @click="
                                                            localFilterData(
                                                                'category',
                                                                category
                                                            )
                                                        "
                                                    >
                                                        {{ category.name }}
                                                    </span>
                                                </span>
                                            </v-expansion-panel-header>
                                            <v-expansion-panel-content>
                                                <span
                                                    v-for="(
                                                        subCategory, sonIndex
                                                    ) in category.sub_categories"
                                                    :key="sonIndex"
                                                >
                                                    <div
                                                        class="sub-category"
                                                        @click="
                                                            localFilterData(
                                                                'subCategory',
                                                                subCategory
                                                            )
                                                        "
                                                        :class="{
                                                            activeCategory:
                                                                isSubCategoryActive(
                                                                    subCategory
                                                                ),
                                                        }"
                                                    >
                                                        -{{ subCategory.name }}
                                                    </div>
                                                </span>

                                                <span
                                                    class="paragraph"
                                                    v-if="
                                                        category.sub_categories
                                                            .length === 0
                                                    "
                                                >
                                                    No sub categories</span
                                                >
                                            </v-expansion-panel-content>
                                        </v-expansion-panel>
                                    </v-expansion-panels>
                                </div>

                                <!--categories -->

                                <!--brands -->

                                <div class="brands-filter">
                                    <div class="header-holder">
                                        <span>Brands </span>
                                    </div>

                                    <span
                                        class="reset-holder"
                                        v-if="canResetBrandsFilter"
                                        @click="localResetFilterData('brand')"
                                    >
                                        <v-icon class="icon">mdi-cached</v-icon>

                                        <span class="header"> Reset</span>
                                    </span>

                                    <div class="clearing"></div>

                                    <span
                                        class="brand-span"
                                        v-for="(brand, index) in brands"
                                        :key="index"
                                        :class="{
                                            activeBrandSpan:
                                                isBrandActive(brand),
                                        }"
                                    >
                                        <span
                                            @click="
                                                localFilterData('brand', brand)
                                            "
                                        >
                                            {{ brand.name }}
                                        </span>
                                    </span>
                                </div>

                                <div class="clearing"></div>

                                <!--brands -->

                                <!--tags -->

                                <div class="tags-filter">
                                    <div class="header-holder">
                                        <span>Tags </span>
                                    </div>

                                    <span
                                        class="reset-holder"
                                        v-if="canResetTagsFilter"
                                        @click="localResetFilterData('tag')"
                                    >
                                        <v-icon class="icon">mdi-cached</v-icon>

                                        <span class="header"> Reset</span>
                                    </span>

                                    <div class="clearing"></div>

                                    <span
                                        class="brand-span"
                                        v-for="(tag, index) in tags"
                                        :key="index"
                                        :class="{
                                            activeBrandSpan: isTagActive(tag),
                                        }"
                                    >
                                        <span
                                            @click="localFilterData('tag', tag)"
                                        >
                                            {{ tag.name }}
                                        </span>
                                    </span>
                                </div>

                                <div class="clearing"></div>

                                <!--tags -->

                                <!--price -->

                                <div class="price-filter">
                                    <div class="header-holder">
                                        <span>Price </span>
                                    </div>

                                    <span
                                        class="reset-holder"
                                        v-if="canResetPricesFilter"
                                        @click="localResetFilterData('price')"
                                    >
                                        <v-icon class="icon">mdi-cached</v-icon>

                                        <span class="header"> Reset</span>
                                    </span>

                                    <div class="clearing"></div>

                                    <v-text-field
                                        rounded
                                        class="shop-min-price"
                                        :value="filter.minPrice"
                                        color="pink lighten-3"
                                        background-color="#ffffff"
                                        placeholder="Min price"
                                        solo
                                        dense
                                        type="number"
                                        @input="
                                            setPriceData('minPrice', $event)
                                        "
                                    ></v-text-field>

                                    <v-text-field
                                        rounded
                                        class="shop-max-price"
                                        :value="filter.maxPrice"
                                        color="pink lighten-3"
                                        background-color="#ffffff"
                                        placeholder="Max price"
                                        solo
                                        dense
                                        type="number"
                                        @input="
                                            setPriceData('maxPrice', $event)
                                        "
                                    ></v-text-field>

                                    <v-btn
                                        color="warning"
                                        @click="localFilterData('price')"
                                    >
                                        Filter
                                    </v-btn>
                                </div>

                                <!--price -->

                                <!--colors -->

                                <div class="colors-filter">
                                    <div class="header-holder">
                                        <span>Colors </span>
                                    </div>

                                    <span
                                        class="reset-holder"
                                        v-if="canResetColorsFilter"
                                        @click="localResetFilterData('color')"
                                    >
                                        <v-icon class="icon">mdi-cached</v-icon>

                                        <span class="header"> Reset</span>
                                    </span>

                                    <div class="clearing"></div>

                                    <div class="color-blocks-holder">
                                        <div
                                            class="color-block"
                                            v-for="(color, index) in colors"
                                            :key="index"
                                        >
                                            <div
                                                class="color-holder"
                                                @click="
                                                    localFilterData(
                                                        'color',
                                                        color
                                                    )
                                                "
                                                :style="{
                                                    backgroundColor: color.hex,
                                                }"
                                            >
                                                <v-icon
                                                    class="color-icon"
                                                    :class="{
                                                        opacityTrue:
                                                            isColorActive(
                                                                color
                                                            ),
                                                    }"
                                                >
                                                    mdi-check
                                                </v-icon>
                                            </div>

                                            <div class="paragraph-holder">
                                                <span class="paragraph">
                                                    {{ color.name }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearing"></div>
                                </div>
                                <div class="clearing"></div>

                                <!--colors -->

                                <!--sizes -->
                                <div class="sizes-filter">
                                    <div class="header-holder">
                                        <span>Sizes </span>
                                    </div>

                                    <span
                                        class="reset-holder"
                                        v-if="canResetSizesFilter"
                                        @click="localResetFilterData('size')"
                                    >
                                        <v-icon class="icon">mdi-cached</v-icon>

                                        <span class="header"> Reset</span>
                                    </span>

                                    <div class="clearing"></div>

                                    <div class="size-blocks-holder">
                                        <div
                                            class="size-block"
                                            v-for="(size, index) in sizes"
                                            :key="index"
                                        >
                                            <div
                                                class="size-holder"
                                                @click="
                                                    localFilterData(
                                                        'size',
                                                        size
                                                    )
                                                "
                                            >
                                                <v-icon
                                                    class="size-icon"
                                                    :class="{
                                                        opacityTrue:
                                                            isSizeActive(size),
                                                    }"
                                                >
                                                    mdi-check
                                                </v-icon>
                                            </div>

                                            <div class="paragraph-holder">
                                                <span class="paragraph">
                                                    {{ size.name }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearing"></div>
                                </div>
                                <div class="clearing"></div>
                                <!--colors -->
                            </div>

                            <div class="products-section">
                                <div class="actions-father">
                                    <div class="products-number">
                                        <div class="paragraph">
                                            show
                                            {{ filteredProducts.length }} of
                                            {{ totalProductsNumber }} product
                                        </div>
                                    </div>

                                    <div class="sort">
                                        <div class="field-holder">
                                            <v-select
                                                @change="
                                                    localSortProducts($event)
                                                "
                                                :items="sorts"
                                                label="Sort By"
                                                hide-details
                                                rounded
                                                dense
                                                solo
                                                class="sort-field"
                                                color="warning"
                                            ></v-select>
                                        </div>
                                    </div>
                                    <div class="clearing"></div>
                                </div>

                                <div v-if="filteredProducts.length">
                                    <div
                                        class="product-holder"
                                        v-for="(
                                            product, index
                                        ) in paginatedProducts"
                                        :key="index"
                                    >
                                        <div
                                            class="product-card-loader"
                                            v-if="cardsLoading"
                                        ></div>

                                        <transition name="fade">
                                            <div class="product-content">
                                                <div
                                                    class="image-holder"
                                                    :style="{
                                                        backgroundImage: product
                                                            .variations.length
                                                            ? 'url(http://127.0.0.1:8000' +
                                                              product
                                                                  .variations[0]
                                                                  .big_image +
                                                              ')'
                                                            : 'url(' +
                                                              'http://127.0.0.1:8000/images/categories/indeed/category-1.jpg' +
                                                              ')',
                                                    }"
                                                >
                                                    <span
                                                        class="icon_heart_alt"
                                                        @click="
                                                            $store.dispatch(
                                                                'whishlists/add',
                                                                product.id
                                                            )
                                                        "
                                                    ></span>

                                                    <span
                                                        class="icon_cart_alt"
                                                    ></span>

                                                    <img
                                                        :src="
                                                            'http://127.0.0.1:8000' +
                                                            product.preview_image
                                                        "
                                                        alt=""
                                                        class="variation-image"
                                                    />

                                                    <div
                                                        v-html="
                                                            getProductState(
                                                                product
                                                            )
                                                        "
                                                    ></div>
                                                </div>

                                                <div class="text-holder">
                                                    <div
                                                        class="product-category-holder"
                                                    >
                                                        {{
                                                            product.category
                                                                .name
                                                        }}
                                                        <br />
                                                    </div>

                                                    <div
                                                        class="product-name-holder"
                                                        @click="
                                                            goToProductDetails(
                                                                product
                                                            )
                                                        "
                                                    >
                                                        {{ product.name }}
                                                    </div>

                                                    <div
                                                        class="product-price-holder"
                                                        v-if="
                                                            product.discount_price
                                                        "
                                                    >
                                                        ${{
                                                            product.discount_price
                                                        }}

                                                        <span
                                                            class="product-discount-price"
                                                        >
                                                            ${{
                                                                product.selling_price
                                                            }}</span
                                                        >
                                                    </div>

                                                    <div
                                                        class="product-price-holder"
                                                        v-else
                                                    >
                                                        ${{
                                                            product.selling_price
                                                        }}
                                                    </div>
                                                </div>
                                            </div>
                                        </transition>
                                    </div>
                                </div>

                                <transition name="fade">
                                    <div
                                        v-if="!filteredProducts.length"
                                        class="row expanded_transition"
                                    >
                                        <div class="col-12">
                                            <div
                                                v-if="cardsLoading"
                                                class="alert-loader-holder"
                                            >
                                                <v-progress-linear
                                                    indeterminate
                                                    color="yellow darken-2"
                                                ></v-progress-linear>
                                            </div>

                                            <div
                                                class="alert alert-warning alert-holder"
                                                role="alert"
                                                v-else
                                            >
                                                <div
                                                    class="warning-loader"
                                                ></div>
                                                <p>
                                                    No products with the search
                                                    entries
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </transition>

                                <div class="clearing"></div>

                                <v-pagination
                                    color="orange"
                                    class="pagination"
                                    v-model="localPage"
                                    :length="pages"
                                    @input="localUpdatePage()"
                                ></v-pagination>
                            </div>
                            <div class="clearing"></div>
                        </div>
                    </transition>
                </div>
            </v-main>
        </v-app>
    </div>
</template>

<script src="./shop.js"></script>
