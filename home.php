<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package printwish
 */

get_header();
?>


<?php get_template_part( 'template-parts/content', 'homebanner' ); ?>
<?php get_template_part( 'template-parts/content', 'brands' ); ?>
<?php get_template_part( 'components/com', 'reviews' ); ?>


      <section className='pb-10'>
        <div className='max-w-screen-xl mx-auto'>
          <h2 className='sm:text-4xl text-2xl font-semibold font-opensans text-accent uppercase text-center mb-5 bg-red-700'>
            BEST SELLING CATEGORIES
          </h2>
          <div className='grid md:grid-cols-3 lg:grid-cols-4 grid-cols-2 gap-7 mt-10 p-4 md:p-8 bg-gray-100'>
            {Categories?.map((item: CategoryType, idx: number) => {
              return <Category_Box key={idx} data={item} />
            })}
          </div>
        </div>
      </section>
      <Steps />
      {
        props ? <Product_Slider products={props?.products} /> : <p>loading...</p>
      }
      <section className='py-6 pt-0 relative'>
        <div className='max-w-screen-xl mx-auto px-4'>
          <div className='w-fit mx-auto'>
            <h2 className='sm:text-4xl text-2xl font-semibold font-opensans text-accent uppercase text-center mb-5'>
              Know About PrintWish UK
            </h2>
            <p className='text-base font-normal text-accent text-center font-roboto'>
              Know About PrintWish UK
              Printwish UK is a leading custom apparel provider and it is always here to inspire you with great customized things like T-shirts, tote bags, hoodies, sweatshirts, Hi-vis, apron, Wholesale Tote Bags, and many more. The customized t-shirt trend is very popular among both teenagers in school and celebrities these shirts having a solid grip on the young fashion world. So if you are looking for a classy, customized T-shirt which can enhance your personality then you are in the right place because printwish UK customizes T-shirts as you like. Printwish t-shirt printing is better than others and you can also choose every element for your custom t-shirts like the color, the words, the images that will be printed on the shirts, and many more.
            </p>
          </div>
        </div>
      </section>
      <Reviews />

<?php

get_footer();