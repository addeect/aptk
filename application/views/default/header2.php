<!doctype html>
<html lang="<?php echo $lng ?>">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
    body,h1,h2,h3,h4,img{
      font-family: 'Roboto';
      margin:0;
    }
    *{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing:border-box;
    }
    img{
      margin:0;
    }
    @keyframes flickerAnimation {
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    @-o-keyframes flickerAnimation{
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    @-moz-keyframes flickerAnimation{
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    @-webkit-keyframes flickerAnimation{
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }

/*
    CAMINO v1.0
*/
img,p,ul,li,h1,h2,h3{
  margin:0;
  padding: 0;
}
a{
  text-decoration: none;
  cursor: pointer;
}
.te_section1_container_services1{
  width: 371px;
    box-sizing: border-box;
    position: relative;
    margin: 0 60.5% 0 auto;
    text-align: center;
}
.image_container{
  width: 100%;
  float: left;
  position: relative;
}
.image_container>img{
  width: 100%;
  float: left;
  position: relative;
}
.te_section2_areas1_a{
  background-color: #e1f3fd;
  /*background-image: url('<?php echo base_url("assets/img/ca_section1_bg3.jpg")?>');
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: top center;*/
    /* padding-top: 0; */
    padding: 10px 0 120px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.te_section2_areas1{
  background-color: #e1f3fd;
  /*background-image: url('<?php echo base_url("assets/img/ca_section1_bg3.jpg")?>');
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: top center;*/
    /* padding-top: 0; */
    padding: 70px 0 120px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.te_section1_1_areas{
  background-image: url('<?php echo base_url("assets/img/ca_areas_alt2_2.jpg") ?>');
    background-repeat: no-repeat;
    padding-top: 0;
    background-size: auto 110%;
    background-position: top center;
    box-sizing: border-box;
    width: 100%;
    background-color: #1D1E22;
}
.ca_dropdown_item:hover .ca_dropdown_2{
 display: block;
}
.ca_dropdown_2{
  display: none;
    position: absolute;
    top: 0;
    margin: 0px 0 0 203px;
    text-align: left;
    background-color: rgba(98,157,177,0.95);

}
.ca_menu_bar:hover .ca_dropdown_1{
  display: block;
}
.ca_dropdown_item:hover{
  background-color: #8FBFD0;
}
.ca_dropdown_item>a>h2{
    font-size: 14px;
    color: #FFF;
    font-weight: 400;
}
.ca_dropdown_item{
    position: relative;
    float: left;
    height: 100%;
    width: 100%;
    padding: 15px 15px;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_dropdown_1{
  display: none;
  width: 220px;
    position: absolute;
    top: 0;
    margin: 64px 0 0 -16px;
    text-align: left;
    background-color: rgba(98,157,177,0.95);
}
.ca_slider_team_component{
  width: 100%;
  float: left;
  position: relative;
}
.ca_menu_bar>a{
  cursor: pointer;
}
#ca_pointer4{
  width: 100%;
  margin: 50px auto;
  position: absolute;
  height: 20px;
  top:0;
}
#ca_pointer3{
  width: 100%;
  margin: 150px auto;
  position: absolute;
  height: 20px;
  top:0;
}
#ca_pointer2{
  width: 100%;
  margin: 580px auto auto auto;
  position: absolute;
  height: 20px;
  top:0;
  z-index: 0;
}
#ca_pointer1{
  width: 100%;
  margin: 50px auto;
  position: absolute;
  height: 20px;
  top:0;
}
.ca_product_desc_figure1>img{
  height: 100%;
  float: right;
  position: relative;
}
.ca_product_desc_figure1{
  width: 70%;
  float: left;
  position: relative;
  height: 200px;
  margin:0 0 45px 0;
}
.ca_product_desc_section1>h2{
  font-family: 'Fira Sans';
  font-size: 36px;
  color: #FFF;
  font-weight: 300;
  text-align:right;
  line-height:1.2; 
}
.ca_product_desc_section1{
  width: 30%;
  float: right;
  position: relative;
  background-color: #5c9bc8;
  height: 200px;
  padding: 85px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_product_desc_figure>img{
  height: 100%;
  float: left;
  position: relative;
}
.ca_product_desc_figure{
  width: 70%;
  float: right;
  position: relative;
  height: 200px;
  margin:0 0 45px 0;
}
.ca_product_desc_section>h2{
  font-family: 'Fira Sans';
  font-size: 36px;
  color: #FFF;
  font-weight: 300;
  text-align:left;
  line-height:1.2; 
}
.ca_product_desc_section{
  width: 30%;
  float: left;
  position: relative;
  background-color: #5c9bc8;
  height: 200px;
  padding: 85px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_product_desc_section_a>h2,.ca_product_desc_section_b>h2,.ca_product_desc_section_c>h2,.ca_product_desc_section_d>h2,.ca_product_desc_section_e>h2{
  font-family: 'Fira Sans';
  font-size: 36px;
  color: #FFF;
  font-weight: 300;
  text-align:left;
  line-height:1.2; 
}
.ca_product_desc_section_a{
  width: 30%;
  float: left;
  position: relative;
  background-color: #1b75bb;
  height: 200px;
  padding: 60px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_product_desc_section_b{
  width: 30%;
  float: left;
  position: relative;
  background-color: #00a79d;
  height: 200px;
  padding: 60px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_product_desc_section_c{
  width: 30%;
  float: left;
  position: relative;
  background-color: #f05a28;
  height: 200px;
  padding: 60px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_product_desc_section_d{
  width: 30%;
  float: left;
  position: relative;
  background-color: #f7931d;
  height: 200px;
  padding: 60px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_product_desc_section_e{
  width: 30%;
  float: left;
  position: relative;
  background-color: #fbaf3f;
  height: 200px;
  padding: 60px 20px 10px 20px;
  margin:0 0 45px 0;
}
.ca_separator_services_container{
  width: 100%;
  position: relative;
  float: left;
  margin: 20px 0;
}
.ca_separator_services{
  width: 90px;
  height: 11px;
  position: relative;
  margin: 0 auto;
  background-color: #7cc4e0;
}
.ca_separator_services_a{
  width: 90px;
  height: 11px;
  position: relative;
  margin: 0 auto;
  background-color: #1b75bb;
}
.ca_separator_services_b{
  width: 90px;
  height: 11px;
  position: relative;
  margin: 0 auto;
  background-color: #00998a;
}
.ca_products_services_title1{
  margin-top: -160px;
  padding: 0 0 10px 0;
  text-align: center;
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_products_services_title{
  margin-top: -160px;
  padding: 0 0 10px 0;
  text-align: center;
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_products_services_img1{
  text-align: center;
  margin-bottom: -100px;
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_products_services_img{
  text-align: center;
  margin-bottom: -100px;
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_products_services_img1>img{
  width: 49px;
}
.ca_products_services_title1>h2{
  font-size: 30px;
  font-family: 'Fira Sans';
  color: #FFF;
  font-weight: 200;
  line-height: 1.2;
}
.ca_products_services_img>img{
  width: 49px;
}
.ca_products_services_title>h2{
  font-size: 30px;
  font-family: 'Fira Sans';
  color: #FFF;
  font-weight: 200;
  line-height: 1.2;
}
.ca_products_services_content{
  width: 100%;
  height: 100%;
  padding: 72px 5px;
}
.ca_products_services_overlay{
  opacity: 0;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background-color: rgba(118,175,190,0.8);
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_contact_us_half{
  width: 49.99%;
  float: left;
  position: relative;
  height: 110px;
  padding: 0 2px;
  z-index: 9;
}
.ca_menu_bar:hover{
  border-top:7px solid yellow;
}
.ca_menu_bar>a>h2{
  font-family: 'Fira Sans';
  font-weight: 400;
  color:#FFF;
  font-size: 16px;
}
.ca_menu_bar_wide{
}
.ca_menu_bar_normal{
}
.ca_menu_bar{
  border-top:7px solid transparent;
  float: left;
  position: relative;
  padding: 17px 0 30px 0;
  margin: 0 20px;
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_right_navbar{
  float: right;
  padding: 0 0 0 0;
  position: relative;
  height: 61px;
}
.ca_left_navbar{
  float: left;
  padding: 5px 0;
  position: relative;
}
.ca_section_team_top{
  width: 100%;
  background-color: #0475bb;
  position: relative;
  float: left;
  z-index: 2;
}
.ca_team_section>img{
  width: 100%;
  float: left;
  position: relative;
}
.ca_team_section{
  width: 100%;
  float: left;
  position: relative;
  top: 0;
  left: 0;
  z-index: 0;
}
.ca_autohide_navbar_content>img{
  width: 90px;
  position: relative;
  float: left;
}
.ca_autohide_navbar_content{
  width: 100%;
  position: relative;
  float: left;
}
.ca_autohide_navbar_container{
  width: 1023px;
  position: relative;
  margin: 0 auto;
}
.ca_autohide_navbar{
  width: 100%;
  position: fixed;
  padding: 0;
  top: 0;
  float: left;
  text-align: center;
  background-color: rgba(108,189,211,0.8);
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
    -webkit-backface-visibility:hidden; /*Most Important*/
}
#prev_slide:hover>i,#next_slide:hover>i{
  color: #79BFE0;
}
#prev_slide,#next_slide{
  cursor: pointer;
}
#prev_slide>i,#next_slide>i{
  color: #c7eafd;
  font-size: 50px;
  -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
.ca_control_right{
  position: relative;
  float: right;
  width: 50px;
}
.ca_control_left{
  position: relative;
  float: left;
  width: 50px;
}
.ca_control{
  width: 1100px;
    position: absolute;
    top: 0;
    margin-top: 235px;
    left: 0;
    margin-left: -66px;
}
ul.te_menu_items_sub{
  border-left: 7px solid #C6E9FA;
    padding-left: 50px
}
li.te_menu_items_sub_nav2:hover .ca_pointer_menu{
  opacity: 1;
}
li.te_menu_items_sub_nav2:hover .ca_menu_text{
  color: #1b75bb;
}
.ca_menu_text .current{
  color: #1b75bb;
}
.ca_pointer_menu .hide_pointer{
  opacity: 0;
}
.hide_pointer{
  opacity: 0;
}
.ca_right1_menu{
  width: 90%;
  float: left;
}
.ca_left1_menu{
  width: 10%;
    float: left;
    position: relative;
    left: 0;
    margin-left: -57px;
}
.ca_menu_text{
  font-size: 15px;
  font-weight: 200;
  font-family: 'Roboto';
  /*color: #58585b;*/
}
.ca_pointer_menu{
  display: block;
 height: 33px;
    position: relative;
    top: 0;
    left: 0;
    margin-top: -7px;
    margin-left: 6px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.ca_separator_menu{
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  margin-top:0;
  margin-left:0;
}
.te_side_nav1_content1>a:hover{
  color: #1b75bb;
}
.te_side_nav1_content1>a{
  font-family: 'Dosis';
  font-weight: 200;
  font-size: 48px;
  color: #939597;
}
.te_side_nav1_content1{
  position: relative;
    float: left;
  -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
    transform: rotate(45deg);
}
.ca_team_content{
  width: 100%;
  float: left;
  position: relative;
  padding: 80px 0 0 0;
}
.ca_person_desc>p{
  font-weight: 200;
  font-family: 'Roboto';
  font-size: 17px;
  color: #6d6e70;
  line-height: 1.5;
}
.ca_person_job>p{
  font-weight: 400;
  font-family: 'Roboto';
  font-size: 17px;
  color: #6d6e70;
}
.ca_person_name>h3{
  font-weight: 400;
  font-family: 'Roboto';
  font-size: 20px;
  color: #0071bb;
}
.ca_person_desc{
  float: left;
  text-align: left;
  position: relative;
  padding: 0 0 0 0;
  width: 100%;
}
.ca_person_job{
  float: left;
  text-align: left;
  position: relative;
  padding: 0 0 15px 0;
  width: 100%;
}
.ca_person_name{
  float: left;
  text-align: left;
  position: relative;
  padding: 0 0 2px 0;
  width: 100%;
}
.ca_desc_right{
  float: right;
  position: relative;
  width: 70%;
  padding: 20px 0 0 0;
}
.ca_desc_left{
  float: left;
  position: relative;
  width: 70%;
  padding: 20px 0 0 0;
}
.ca_ass_right>img,.ca_ass_left>img{
  width: 100%;
}
.ca_ass_right{
  float: right;
  position: relative;
  width: 30%;
  padding: 0 0 0 30px ;
}
.ca_ass_left{
  float: left;
  position: relative;
  width: 30%;
  padding: 0 30px 0 0 ;
}
.ca_ass_container1{
  width: 100%;
  float: left;
  position: relative;
  background-color: #FFF;
  padding: 10px 70px 10px 40px;
  margin: 7.5px 0;
}
.ca_ass_container2{
  width: 100%;
  float: left;
  position: relative;
  background-color: #c6eafb;
  padding: 10px 40px 10px 70px;
  margin: 7.5px 0;
}
#section{
  margin-top: -103px;
}
.ca_menu>a>i{
  color: #939597;
}
.ca_menu{
  width: 30px;
  position: fixed;
  top: 0;
  margin-top: 20px;
  left: 0;
  margin-left: 20px;
  z-index: 10;
  cursor: pointer;
}
.ca_vertical_separator{
  position: fixed;
  height: 100%;
  width: 1px;
  background-color: #939597;
  margin-left: 50px;
  z-index: 10; 
}
.ca_footer>h3{
  font-family: 'Roboto';
  font-weight: 200;
  font-size: 12px;
  color: #808284;
}
.ca_footer{
  width: 100%;
  text-align: left;position: relative;
  float: left;
  margin:0 auto;
}
.ca_sitemap_items>a{
  font-size: 12px;
  font-weight: 200;
  color: #808284;
  font-family: 'Roboto';
}
.ca_sitemap_title>a{
  font-size: 12px;
  font-weight: 400;
  color: #808284;
  font-family: 'Roboto';
}
.ca_sitemap_items{
  width: 100%;
  position: relative;
  float: left;
  padding: 0 0 5px 0;
  text-align: left;
}
.ca_sitemap_title{
  width: 100%;
  position: relative;
  float: left;
  padding: 0 0 1px 0;
  text-align: left;
}
.ca_sitemap_part{
  padding:0 10px;
  width: 12.5%;
  float: left;
  position: relative;
}
.ca_sitemap_container{
  position: relative;
  margin: 0 auto;
  width: 1023px;
}
.ca_sitemap{
  width: 100%;
  position: relative;
  float: left;
  padding: 50px 0;
  background-color: rgb(230,231,232);
}
.ca_section6{
  float: left;
  position: relative;
  width: 100%;
}
.ca_contact_send{
  width: 100%;
  float: right;
  position: relative;
  text-align: right;
  padding-right: 2px;
}
.ca_contact_send>input:hover{
  background-color: rgba(42, 144, 189, 0.73);
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.ca_contact_send>input{
  padding: 4px 10px 4px 10px;
    background-color: #71adda;
    cursor: pointer;
    border: 2px solid #71adda;
    font-family: "Roboto";
    color: #FFF;
    font-size: 20px;
    font-weight: 200;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.ca_contact_desc_text{
  text-align: left;
    color: #6d6e70;
    font-weight: 200;
    font-size: 17px;
    font-family: 'Roboto';
}
.ca_contact_field_textarea>textarea{
  padding: 5px 10px;
  width: 100%;
    resize: none;
    font-family: 'Roboto';
    height: 90px;
    font-size: 17px;
    font-weight: 200;
    background-color: rgba(255,255,255,0.87);
    border: 2px solid transparent;
    height: 110px;
    color: #6d6e70;
}
.ca_contact_field>textarea{
  padding: 5px 10px;
    width: 100%;
    resize: none;
    font-family: 'Roboto';
    height: 34px;
    font-size: 17px;
    font-weight: 200;
    background-color: rgba(255,255,255,0.87);
    border: 2px solid transparent;
    overflow: hidden;
    color: #6d6e70;
}
.ca_contact_field{
  position: relative;
  float: left;
  width: 100%;
}
.ca_contact_content{
  width: 100%;
  float: left;
  position: relative;
  padding: 10px 0 0 0;
}
.ca_contact_bold{
  text-align: left;
  font-size: 20px;
  font-family: 'Roboto';
  font-weight: 700;
  color: #6d6e70;
  padding: 0 0 5px 0;
}
.ca_contact_desc{
  width: 100%;
  position: relative;
  float: left;
  padding: 14px 0;
}
.ca_contact_text{
  font-size: 60px;
  font-family: 'Fira Sans';
  font-weight: 200;
  color: #FFF;
}
.ca_contact_title{
  width: 100%;
  text-align: left;
  position: relative;
  float: left;
}
.ca_contact_container{
   width: 100%;
    position: relative;
    padding: 34px 45px;
}
.ca_contact{
  width: 1023px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    text-align: center;
}
.te_section5{
  position: relative;
  background-image: url('<?php echo base_url("assets/img/contactus.jpg") ?>');
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: top center;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
    padding: 320px 0 60px 0;
}
.ca_team_third:hover > .ca_overlay{
  background-color: #c7eafd;
  border: none;
}
.ca_overlay{
  border: 1.5px solid #B3B3B3;
    position: absolute;
    bottom: 0;
    width: 71%;
    height: 70%;
    left: 0;
    /* right: 0; */
    /* text-align: center; */
    z-index: 0;
    background-color: #E2F4FE;
    margin: 0 45px;
    -webkit-transition:all 0.2s ease;
    -moz-transition:all 0.2s ease;
    -o-transition:all 0.2s ease;
    transition:all 0.2s ease;
}
.ca_separator1{
  background-color: #c7eafd;
  width: 100%;
  height: 4.5px;
  float: left;
  margin: 60px 0;
}
.ca_team_job{
  font-weight: 200;
  font-family: 'Roboto';
  color: #6d6e70;
  text-align: center;
  font-size: 14px;
  font-style: italic;
}
.ca_job_container{
  width: 100%;
  float: left;
  position: relative;
}
.ca_team_name{
  font-family: 'Roboto';
  font-weight: 400;
  font-size:20px;
  color:#0071bb;
}
.ca_name_container{
  width: 100%;
  float: left;
  position: relative;
  text-align: center;
}
.ca_team_detail{
  width: 100%;
  float: left;
  padding: 10px 10px;
  margin-top: 16px;
  position: relative;
    z-index: 5;
}
.ca_team_photo>img{
  width: 100%;
  float: left;
}
.ca_team_photo{
  width: 100%;
  float: left;
  text-align: center;
  position: relative;
    z-index: 5;
}
.ca_team_third{
  width: 33.33%;
  float: left;
  position: relative;
  padding: 0 70px;
  height: 300px;
  cursor: pointer;
  background-color: #e2f4fe;
}
.ca_slider_team{
  background-color: #e2f4fe;
}
.ca_section_bottom{
  width: 100%;
  float: left;
  position: relative;
  background-color: #e2f4fe;
}
.ca_team_desc_text2{
color: #FFF;
    font-weight: 200;
    font-family: 'Fira Sans';
    font-size: 17px;
    line-height: 1.5;
    text-align: justify;
    font-style: italic;
}
.ca_team_desc_text1{
    color: #FFF;
    font-weight: 200;
    font-family: 'Roboto';
    font-size: 17px;
    line-height: 1.5;
}
.ca_team_desc_text_signature{
    color: #FFF;
    font-weight: 400;
    font-family: 'Fira Sans';
    font-size: 20px;
    line-height: 1.5;
    text-align: left;
    /*font-style:italic;*/
}
.ca_team_desc_text{
    color: #FFF;
    font-weight: 200;
    font-family: 'Fira Sans';
    font-size: 17px;
    line-height: 1.5;
    text-align: justify;
}
.ca_team_desc2{
  padding: 0 0 0 0;
  text-align: left;
  float: left;
  position: relative;
  width: 100%;
}
.ca_team_desc1{
  padding: 10px 0 0 0;
  text-align: left;
  float: left;
  position: relative;
  width: 100%;
}
.ca_team_desc{
  padding: 10px 0;
  text-align: left;
  float: left;
  position: relative;
}
.ca_team_left>img{
  width: 100%;
  float: left;
}
.ca_team_right{
  width: 73%;
  float: left;
  position: relative;
  padding: 0 0 0 10px;
}
.ca_team_left{
  width: 27%;
  float: left;
  position: relative;
  padding: 0 30px 0 0;
}
.ca_team_title_text1{
  font-size: 60px;
  font-weight: 200;
  font-family: 'Dosis';
  color: #FFF;
}
.ca_team_title_text{
  font-size: 60px;
  font-weight: 200;
  font-family: 'Fira Sans';
  color: #FFF;
}
.ca_team_title{
  padding-bottom: 50px;
  width: 100%;
  float: left;
  text-align: center;
  position: relative;
}
.ca_section_top{
  width: 100%;
  float: left;
  text-align: left;
  position: relative;
}
.ca_team_container{
  position: relative;
  width: 100%;
  float: left;
  text-align: left;
}
.ca_services_logo{
  position: absolute;
    right: 0;
    bottom: 0;
    margin-bottom: -38px;
    width: 400px;
}
.ca_products_services_overlay:hover{
  opacity:0.8;
}
.ca_products_services_overlay:hover  .ca_products_services_title1{
  margin-top: 38px;
}
.ca_products_services_overlay:hover  .ca_products_services_img1{
  margin-bottom: 80px;
}
.ca_products_services_overlay:hover  .ca_products_services_title{
  margin-top: 18px;
}
.ca_products_services_overlay:hover  .ca_products_services_img{
  margin-bottom: 70px;
}
.ca_icon>img{
  width: 100%;
  opacity:1;
  height: 100%;
    position: relative;
    float: left;
}
.ca_item_text{
  font-size: 30px;
  font-family: 'Dosis';
  font-weight: 200;
  color: #ffdd17;
  text-align: left;
}
.ca_icon_title{
  width: 70%;
  float: left;
  padding: 0 10px;
}
.ca_icon{
  width: 100%;
  float: left;
  padding: 0;
  position: relative;
  overflow: hidden;
}
.ca_services_item{
  width: 100%;
  float: left;
  padding: 0;
  cursor: pointer;
  margin:3px 0;
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.ca_services_content_mid{
  width: 33.3%;
  float: left;
  padding: 0 3px;
}
.ca_services_content_right{
  width: 33.3%;
  float: left;
  padding: 0 3px;
}
.ca_services_content_left{
  width: 33.3%;
  float: left;
  padding: 0 3px;
}
.ca_services_content{
  width: 100%;
  float: left;
  position: relative;
    z-index: 1;
}
.ca_services_desc{
  padding: 0 0 20px 0;
}
.ca_services_title{
  padding: 0 0 20px 0;
}
.ca_services_text{
  font-size: 60px;
  font-family: 'Dosis';
  color: #ffdd17;
  text-align: left;
  font-weight: 200;
}
.ca_general_desc{
  float: left;
    width: 100%;
    position: relative;
    text-align: center;
    padding: 12px 0 50px 0;
}
.te_section3 .ca_welcome_text{
  font-size: 60px;
  font-family: 'Fira Sans';
  color: #FFF;
  font-weight: 200;
}
.ca_welcome_text{
  font-size: 60px;
  font-family: 'Fira Sans';
  color: #808284;
  font-weight: 200;
}
.ca_welcome_text_a{
  font-size: 60px;
  font-family: 'Fira Sans';
  color: #FFF;
  font-weight: 200;
}
.ca_welcome{
  position: relative;
    width: 100%;
    text-align: center;
    float: left;
    padding: 50px 0 0 0;
}
.ca_content{
  padding: 0 0 40px 0;
  float: left;
  width: 100%;
}
.ca_content_desc_mobile{
  display: none;
  padding: 26px 0 0 0;
  float: left;
  width: 100%;
  position: relative;
  left: 0;
  margin-left: 0;
}
.ca_content_desc{
  padding: 26px 0 0 0;
  float: left;
  width: 100%;
  position: relative;
  left: 0;
  margin-left: 0;
}
.ca_content_desc_mobile_rev1{
  display: none;
  padding: 26px 0 0 0;
  float: left;
  width: 364px;
  position: relative;
  left: 0;
  margin-left: 0;
}
.ca_content_desc_rev1{
  padding: 26px 0 0 0;
  float: left;
  width: 100%;
  position: relative;
  left: 0;
  margin-left: 0;
}
.te_trigger1{
    position: relative;
    bottom: 0;
    width: 10px;
    height: 10px;
    float: left;
    left: 0;
}
.te_menu_btn_rwd{
    display: none;
    position: absolute;
    left: 0;
    top: 0;
    font-size: 150%;
    margin-top: 10%;
    margin-left: 10%;
}
.te_img12_rwd{
    display: none;
    width: 100%;
}
.te_img13{
    width: 100%;
}
.te_body_content_bot,.te_body_content_top{
    display: none;
}
.te_show_content{
    text-align: left;
    font-style: italic;
    font-weight: 700;
    line-height: 100%;
}
.te_learn_more,.te_hide{
    color: #3BA5F9;
    font-size: 88%;
}
.te_show_content1{
    display: none;
    float: left;
    width: 100%;
    padding-top: 2%;
    padding-bottom: 1%;
}
.te_learn_more_footer_btn{
    float: right;
    margin-top: 0;
    font-size: 100%;
    line-height: 0;
}
.te_learn_more_footer{
    color: #d1d2d4;
}
.hidden{
    display: none;
}
.rotate180{
    -ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}
.footer_container_rwd{
    display: none;
    float: left;
    width: 100%;
    line-height: 85%;
    font-family: "Lato", Open Sans, Helvetica;
}
.te_hidden_content1{
    padding-bottom: 2%;
    float: left;
}
.te_spacer1{
    line-height: 36%;
}
.rwd_numbers{
  display: block;
  font-size: 209px;
  font-weight: 200;
  color: rgba(255, 255, 255, 0.44);
  position: absolute;
  right: 0;
  margin-right: -10px;
  bottom: 0;
  line-height: 128px;
  font-family: 'Fira Sans';
}
.service_menu{
  display: none;
  color: #8cc0d2;
  font-size: 18px;
  float: right;
  padding-top: 0px;
  padding-right: 36px;
}
.hide_service_menu{
  display: none;
  color: #8cc0d2;
  font-size: 18px;
  float: right;
  padding-top: 0px;
  padding-right: 36px;
}
.mobile_dot_menu{
  display: none;
  background-color: #8cc0d2;
  width: 7px;
  height: 7px;
  border-radius: 7px;
  position: absolute;
  top: 0;
  left :0;
  margin-top: 15px;
  margin-left: 1px;
}
.menu_mobile{
  display: none;
  color: #FFF;
  position: absolute;
  top: 0;
  padding-top: 14px;
  padding-right: 21px;
  right: 0;
}
.menu_pointer_mobile{
  display: none;
  width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 7px solid #86c3d0;
    margin-right: 22px;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
}
/* --- RESPONSIVE 2016-04-13 22:28 Addeect --- */
    @media screen and (max-width:801px){ 
        .te_section1_container_services1{
          width: 100% !important;
        }
        .menu_mobile,.menu_pointer_mobile{
          display: block !important;
        }
        .ca_left_navbar{
          padding: 5px 16px !important;
        }
        .ca_dropdown_item{
          padding: 12px 15px !important;
        }
        .mobile_dot_menu{
          display: block !important;
        }
        .ca_dropdown_item:hover{
          background-color: #c0d9e2 !important
        }
        .ca_dropdown_item:hover .ca_dropdown_2{
          display: none !important;
        }
        .ca_menu_bar:hover>a>h2{
          color: #406e80 !important;
        }
        .ca_menu_bar:hover{
         background-color: #c0d9e2 !important
        }
        .ca_current_alt2{
          border-left: none !important;
        }
        .ca_dropdown_item>a>h2{
          font-size: 12px !important;
          color: #406e80 !important;
        }
        .service_menu{
          display: block !important;
        }
        .te_section1_scroll_div{
          display: none !important;
        }
        .ca_dropdown_1{
          position: relative !important;
          margin: 30px 0 0 0 !important;
        }
        .ca_menu_bar>a>h2{
          float: left !important;
          font-size: 12px !important;
        }
        .current_menu{
          border-top: none !important;
        }
        .ca_menu_bar{
          padding: 10px 10px 10px 57px !important;
          text-align: left !important;
          width: 100% !important;
          margin: 0 !important;
          border-top: none !important;
          background-color: rgb(92, 155, 200) !important;
        }
        .ca_right_navbar{
          height: auto !important;
          width: 100% !important;
        }
        .ca_autohide_navbar_content>a>img{
          height: 36px !important;
        }
        .ca_section1_1_pc{
          background-position: 80% center !important;
          background-size: auto 100% !important;
        }
        .te_section1_1_areas{
          background-size: auto 100% !important;
        }
        .ca_products_services_title1>h2{
          font-size: 16px !important;
        }
        .ca_products_services_img1>img{
          width: 18% !important;
        }
        .te_section2_areas1 .ca_general_desc{
          padding: 12px 0 30px 0 !important;
        }
        .te_section2_areas1_a .ca_general_desc{
          padding: 12px 0 30px 0 !important;
        }
        .te_section2_areas1_a{
          padding: 30px 22px 50px 22px !important;
        }
        .te_section2_areas1{
          padding: 89px 22px 50px 22px !important;
        }
        .te_section2_areas1_a .te_section2_text_home{
          font-size: 14px !important;
          text-align: justify !important;
        }
        .te_section2_areas1_a .ca_welcome_text{
          font-size: 32px !important;
        }
        .te_section2_areas1 .te_section2_text_home{
          font-size: 14px !important;
          text-align: justify !important;
        }
        .te_section2_areas1 .ca_welcome_text{
          font-size: 32px !important;
        }
        .rwd_numbers{
          display: block !important;
        }
        .ca_product_desc_section1>h2{
          text-align: left !important;
        }
        .ca_section2 .ca_welcome,.ca_section2_a .ca_welcome,.ca_section2_b .ca_welcome,.ca_section2_c .ca_welcome,.ca_section2_d .ca_welcome,.ca_section2_e .ca_welcome{
          padding: 10px 0 0 0 !important;
        }
        .ca_section2 .ca_general_desc,.ca_section2_a .ca_general_desc,.ca_section2_b .ca_general_desc,.ca_section2_c .ca_general_desc,.ca_section2_d .ca_general_desc,.ca_section2_e .ca_general_desc{
          padding: 12px 0 10px 0 !important;
        }
        .ca_separator_services,.ca_separator_services_a{
          width: 139px !important;
          height: 4px !important;
        }
        .ca_product_desc_figure,.ca_product_desc_figure1{
          width: 100% !important;
          height: auto !important;
          margin: 0 0 20px 0 !important;
        }
        .ca_product_desc_figure>img,.ca_product_desc_figure1>img{
          width: 100% !important;
          height: auto !important;
        }
        .ca_product_desc_section,.ca_product_desc_section1,.ca_product_desc_section_a,.ca_product_desc_section_b,.ca_product_desc_section_c,.ca_product_desc_section_d,.ca_product_desc_section_e{
          width: 100% !important;
          margin-bottom: 0 !important;
          /*background-color: #5c9bc8 !important;*/
        }
        .ca_section2,.ca_section2_a,.ca_section2_b,.ca_section2_c,.ca_section2_d,.ca_section2_e{
          padding: 16px 28px 20px 28px !important;
        }
        .te_footer_links_div_right1{
          padding-top: 10px !important;
          padding-bottom:10px !important;
        }
        .ca_footer{
          display: none !important;
        }
        .ca_sitemap_part{
          display: none !important;
          width: 100% !important;
        }
        .ca_contact_content{
          padding: 0 !important;
        }
        .te_section5{
          padding: 70px 0 30px 0 !important;
          background-image: url('<?php echo base_url("assets/img/contactus_mobile.jpg") ?>') !important;
          background-size: auto 100% !important;
          background-position: center bottom !important;
        }
        .ca_contact_container{
          padding: 34px 24px !important;
        }
        .ca_contact_send>input{
          font-size: 14px !important;
        }
        .ca_contact_field_textarea>textarea{
          font-size: 14px !important;
          height: 76px !important;
          padding: 2px 6px !important;
        }
        .ca_contact_field>textarea{
          font-size: 14px !important;
          height: 25px !important;
          padding: 2px 6px !important;
        }
        .ca_contact_us_half{
          height: 100% !important;
          width: 100% !important;
        }
        .ca_contact_text{
          font-size: 26px !important;
        }
        .ca_control_right #next_slide .fa-angle-right{
          float: right !important;
        }
        .ca_control{
          width: 100% !important;
          margin-left: 0 !important;
          margin-top: 90px !important;
          z-index: 9 !important;
          padding: 0 30px !important;
        }
        .ca_team_title{
          padding-bottom: 10px !important;
        }
        .ca_team_desc{
          text-align: center !important;
          float: none !important;
          padding: 5px 0 !important;
        }
        .ca_team_desc_text_signature{
          font-size: 15px !important;
          text-align: center !important;
        }
        .ca_team_desc_text{
          font-size: 10px !important;
        }
        .ca_team_left>img{
         width: 110px !important;
          text-align: center;
          margin: 0 35% !important;
        }
        .ca_team_left{
          width: 100% !important;
          padding: 0 !important;
        }
        .ca_team_right{
          width: 100% !important;
          padding: 0 8% !important;
        }
        .te_section4{
          padding: 25px 0 !important;
        }
        .ca_team_title_text{
          font-size: 36px !important;
        }
        .te_section3 .ca_welcome,.te_section2 .ca_welcome{
          padding-top: 30px !important;
        }
        .te_section3 .ca_general_desc,.te_section2 .ca_general_desc{
          padding: 0 6px 10px 6px !important;
        }
        .te_section2_areas1 .ca_welcome{
          padding: 0 !important;
        }
        .te_section2_areas1_a .ca_welcome{
          padding: 0 !important;
        }
        .te_section3{
          padding: 0px 0 20px 0 !important;
          background-color: #3472b9 !important;
        }
        .ca_section2 .ca_welcome_text,.ca_section2_a .ca_welcome_text_a,.ca_section2_b .ca_welcome_text,.ca_section2_c .ca_welcome_text_a,.ca_section2_d .ca_welcome_text_a,.ca_section2_e .ca_welcome_text{
          font-size: 32px !important;
        }
        .te_section2 .ca_welcome_text{
          font-size: 36px !important;
        }
        .te_section3 .ca_welcome_text{
          font-size: 36px !important;
          color: #FFF !important;
        }
        .ca_content_desc_mobile{
          display: block !important;
          padding-top: 0 !important;
        }
        .ca_content{
          padding: 0 0 12% 0 !important;
        }
        .ca_content_desc{
          display: none !important;
          padding-top: 0 !important;
        }
        .te_img3{
          width: 70% !important;
        }
        .te_section1_1{
          background-position:65% 50% !important;
        }
        .te_section1_container{
          height: 400px !important;
        }
        .te_section1_img_div{
          width: 44% !important;
          margin-left: 7% !important;
          margin-top: 11% !important;
        }
        .ca_products_services_content{
          padding: 0 5px !important;
        }
        .ca_products_services_title>h2{
          font-size: 18px !important;
        }
        .ca_products_services_img>img{
          display: none !important;
        }
        .ca_products_services_overlay{
          opacity:0.8 !important;
        }
        .ca_products_services_title1{
          margin-top: 9vh !important;
        }
        .ca_products_services_img1{
          margin-bottom: 5vh  !important;
        }
        .ca_products_services_title{
          margin-top: 9vh !important;
        }
        .ca_products_services_img{
          margin-bottom: 70px !important;
        }
        .ca_sitemap_items>a{
          font-size: 10px !important;
        }
        .ca_autohide_navbar_container{
          width: 100% !important;
        }
        .ca_products_services_overlay{
          margin: 0 3px !important;
        }
        .ca_icon{
          padding: 0 3px !important;
        }
        .ca_services_content_left,.ca_services_content_mid,.ca_services_content_right{
          width: 100% !important;
        }
        .ca_services_item{
          width: 49.999% !important;
        }
        .ca_sitemap_container{
          width: 100% !important;
        }
        .ca_sitemap{
          padding:11px 25px 0 25px !important;
          background-color: #f4f6f6 !important;
        }
        .ca_contact{
          width: 100% !important;
        }
        .te_footer_brands{
            padding-top: 8% !important;
        }
        .te_separator1{
            display: block !important;
            color: #d1d2d4 !important;
            border-bottom: 1px solid #d1d2d4 !important;
            height: 1px;
        }
        .footer_container_rwd{
            display: block !important;
        }
        .te_left_div_footer,.te_middle_div_footer,.te_right_div_footer{
            display: none !important;
        }
        .te_show_content1{
            display: block !important;
        }
        .te_section3-2{
            padding-top: 5% !important;
        }
        .te_spacer{
            height: 0 !important;
        }
        .te_left_div,.te_right_div{
            display: none !important;
        }
        .te_body_content_bot{
            display: block !important;
            width: 100% !important;
            padding: 0 !important;
        }
        .te_body_content_top{
            display: block !important;
            width: 100% !important;
            padding: 0 !important;
        }
        .te_right_side_areas{
            float: none !important;
        }
        .te_footer_links_div,.te_footer_links_div_mid,.te_footer_links_div_right{
            border-bottom: 2px solid #D8D8D8;
        }
        .te_footer_links_normal{
            font-size: 10px !important;
            font-weight: 200 !important;
            color: #808284 !important;
            font-family: 'Roboto' !important;
        }
        .te_footer_links_bold{
          font-size: 12px !important;
          font-weight: 400 !important;
          color: #808284 !important;
          font-family: 'Roboto' !important;
            float: left !important;
        }
        .te_img_items_desc{
            padding: 2% 0 !important;
        }
        .te_img_items_title{
            font-size: 92% !important;
        }
        .te_img_items_title_text{
            line-height: 120% !important;
            padding-top: 6% !important;
        }
        .ca_section2 .te_section2_text_home,.ca_section2_a .te_section2_text_home_a,.ca_section2_b .te_section2_text_home,.ca_section2_c .te_section2_text_home_a,.ca_section2_d .te_section2_text_home_a,.ca_section2_e .te_section2_text_home{
            line-height: 140% !important;
            font-size: 14px !important;
            text-align: justify !important;
        }
        .te_section2 .te_section2_text_home{
            line-height: 140% !important;
            font-size: 14px !important;
            text-align: justify !important;
        }
        .te_section3 .te_section2_text_home{
            line-height: 140% !important;
            font-size: 14px !important;
            text-align: justify !important;
            color:#FFF !important;
        }
        .te_section2_text_title{
            line-height: 110% !important;
            font-size: 213% !important;
        }
        .te_img_items_desc_text{
            line-height: 169% !important;
            text-align: left !important;
            font-size: 76% !important;
        }
        .te_footer2-1{
            padding: 2% 5% 10% 5% !important;
        }
        .te_footer1{
            padding: 3% 5% !important;
        }
        .te_footer1_container{
            padding: 2% 3% !important;
        }
        .te_left_div_footer,.te_middle_div_footer,.te_right_div_footer{
            width: 100% !important;
        }
        .te_footer1_container,.te_footer1_center{
            width: 100% !important;
        }
        .te_separator{
            width: 100% !important;
            border-bottom: 2px solid #CECECE !important;
        }
        .te_section2_container_desc {
            padding-left: 8% !important;
            padding-right: 8% !important;
            width: 100% !important;
            text-align: left !important;
        }
        .te_section2_text {
            text-align: left !important;
            line-height: 140% !important;
            font-size: 122% !important;
        }
        .te_section2_container_title{
            width: 100% !important;
            text-align: left !important;
            padding-left: 8% !important;
            padding-right: 8% !important;
        }
        .te_section2-2{
            float: left !important;
        }
        .te_img12_rwd{
            display: block !important;
        }
        .te_img12{
            display: none !important; 
        }
        li.te_menu_items{
             font-size: 96% !important;
        }
        li.te_menu_items_sub_nav2,li.te_menu_items_sub{
            font-size: 94% !important;
        }
        .te_menu_btn_rwd{
            display: block !important;
        }
        .scroll_container{
            width: 100% !important;
        }
        .te_logo,.te_logo_black,.te_logo_white{
            width: 37% !important;
        }
        .te_left_top_nav,.te_right_top_nav{
            position: relative !important;
        }
        .te_left_top_nav{
            padding-left: 0 !important;
            width: auto !important;
            top: 0 !important;
            font-size: 150% !important;
            margin-top: 5% !important;
            z-index: 4 !important;
            width: 10% !important;
        }
        .te_right_top_nav{
            float: left !important;
            text-align: center !important;
            width: 100% !important;
            padding-right: 0 !important;
            top: 0 !important;
            margin-top: 3% !important;
            z-index: 3 !important;
            width: 90% !important;
            left: -5% !important;
        }
        .te_top_nav{
            float: left !important;
        }
        .te_top_nav_container{
            position: relative; !important;
            padding: 2% 8% !important;
            float: left !important;
        }
        .te_section1_2,.te_section1_3,.te_section1_4,.te_section1_5,.te_section1_6{
        background-size: auto 100% !important;
        background-position: top center !important;
        }
        .te_section1_container,.te_section1_img_div_slider{
            width: 100% !important;
        }
        .te_section1_img_div_slider{
            padding: 0px 20% !important;
            box-sizing: border-box !important;
            bottom: 33% !important;
        }
        .te_products{
            font-size: 220% !important;
            line-height: 100% !important;
        }
        .te_products_desc{
            display: none !important;
        }
        .te_products_desc_mobile{
          display: block !important;
            font-size: 15px !important;
            line-height: 140% !important;
        }
        #banner_1{
            margin-bottom: 0 !important;
        }
        #banner_2{
            margin-bottom: 0 !important;
        }
        #banner_3{
            margin-bottom: 14% !important;
        }
        #banner_4{
            margin-bottom: 6% !important;
        }
        #banner_5{
            margin-bottom: -15% !important;
        }
        .te_side_nav{
            width: 80% !important;
        }
        .te_side_nav1{
            width: 100% !important;
            padding-top: 10% !important;
        }
        .te_side_nav2{
            position: absolute !important;
            left:0 !important;
            margin-left:12% !important; 
            padding-top: 40% !important;
             width: 100% !important;
             padding-right: 10% !important;
        }
        .te_section2_container{
            width: 100% !important;
        }
        .te_section2{
            padding: 0 8% 30px 8% !important;
        }
        .te_section3{
            float: left !important;
            height: auto !important;
        }
        .te_section3_container{
            float: left !important;
            width: 100% !important;
            padding-bottom: auto !important;
            padding: 0 8% !important;
        }
        .te_section3_items{
            width: 100% !important;
            padding: 0% 20% 15% 20% !important;
        }
        .te_section4{
            float: left !important;
            height: auto !important;
        }
        .te_section4_container{
            float: left !important;
            width: 100% !important;
        }
        .te_section4_items{
            width: 100% !important;
        }
        .te_footer{
            float: left !important;
            padding: 0 8% !important;
        }
        .te_footer_container{
            float: left !important;
            width: 100% !important;
        }
        .ca_section1_1_rev1_a{
          background-position: top center !important;
        }
        .ca_section1_1_rev1_b{
          background-image: url('<?php echo base_url("assets/img/camino-dental-care-home-slider-3-mobile.jpg") ?>') !important;
          background-size: auto 100% !important;
          background-position: top center !important;
        }
    } /* END OF RESPONSIVE  */

.te_banner{
    display: none;
}
.te_products{
    font-size: 64px;
    font-weight: 500;
    line-height: 54px;
    padding-bottom: 33px;
}
.te_products_desc{
   font-size: 37px;
    font-weight: 200;
    line-height: 1.3;
    font-family: 'Fira Sans';
    font-style: normal;
    color: #3075a0;
}
.te_products_desc_mobile{
  display: none;
   font-size: 37px;
    font-weight: 200;
    line-height: 1.3;
    font-family: 'Fira Sans';
    font-style: normal;
    color: #3075a0;
}
.scroll_section{
    background-color: transparent;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
}
.scroll_container{
    width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: -185px auto 0 auto;
    padding-top: 90px;
    padding-bottom: 90px;
    text-align: center;
}
.te_section1_scroll_div{
    position: absolute;
    bottom: 0;
    width: 100%;
}
.bx-wrapper .bx-viewport {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none !important;
    left:0 !important;
    position: relative !important;
    margin-left: 0 !important;
    height: auto !important;
    background: transparent !important;
    -webkit-transform: translatez(0);
    -moz-transform: translatez(0);
    -ms-transform: translatez(0);
    -o-transform: translatez(0);
    transform: translatez(0);
}
::-webkit-input-placeholder {
   color: #797979;
}

:-moz-placeholder { /* Firefox 18- */
   color: #797979;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #797979;  
}

:-ms-input-placeholder {  
   color: #797979;  
}
@keyframes flickerAnimation {
  0%   { opacity:1; }
  50%  { opacity:0; }
  100% { opacity:1; }
}
@-o-keyframes flickerAnimation{
  0%   { opacity:1; }
  50%  { opacity:0; }
  100% { opacity:1; }
}
@-moz-keyframes flickerAnimation{
  0%   { opacity:1; }
  50%  { opacity:0; }
  100% { opacity:1; }
}
@-webkit-keyframes flickerAnimation{
  0%   { opacity:1; }
  50%  { opacity:0; }
  100% { opacity:1; }
}
.ca_product_items_desc>p{
  font-size: 17px;
  font-family: 'Roboto';
  color: #FFF;
  font-weight: 200;
  text-align: left;
  line-height:1.5;
}
.ca_product_items_title>h3{
  font-size: 40px;
  font-family: 'Dosis';
  color: #FFF;
  font-weight: 200;
  text-align: left;
}
.ca_product_items_desc{
  width: 100%;
  position: relative;
  float: left;
  padding: 0 0 0 0;
}
.ca_product_items_title{
  width: 270px;
  position: relative;
  float: left;
  padding: 0 0 20px 0;
}
.ca_product_items_right{
  padding: 0 0 0 40px;
  width: 50%;
  position: relative;
  float: left;
}
.ca_product_items_left{
  padding: 0 40px 0 0;
  width: 50%;
  position: relative;
  float: left;
}
.ca_product_items{
  width: 100%;
  position: relative;
  float: left;
  padding: 0 0 70px 0;
}
.ca_section2{
background-color: #e2f4fd;
    padding: 10px 0 50px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.ca_section2_a{
background-color: #3cb3e7;
    padding: 10px 0 50px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.ca_section2_b{
background-color: #cce8df;
    padding: 10px 0 50px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.ca_section2_c{
background-color: #fbaf3f;
    padding: 10px 0 50px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.ca_section2_d{
background-color: #35bad8;
    padding: 10px 0 50px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.ca_section2_e{
background-color: #fef0b6;
    padding: 10px 0 50px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.ca_product_desc>p{
  font-size: 17px;
  font-family: 'Roboto';
  color: #FFF;
  font-weight: 200;
  line-height: 1.5;
}
.ca_product_desc{
  position: relative;
  text-align: justify;
  float: left;
  width: 100%;
  padding: 0 0 0 0;
}
.ca_product_title>h2{
  font-size: 60px;
  font-family: 'Dosis';
  color: #FFF;
  font-weight: 200;
}
.ca_product_title{
  position: relative;
  text-align: left;
  float: left;
  width: 400px;
  padding: 0 0 30px 0;
}
.ca_product_right{
  width: 80%;
  float: left;
  position: relative;
  padding: 0 0 25px 0;
}
.ca_product_left>img{
  width: 100%;
}
.ca_product_left{
  width: 20%;
  float: left;
  position: relative;
  padding: 0 25px 0 0;
}
.ca_product_banner_content{
  position: absolute;
  top: 0;
  margin-top: -100px;
  width: 100%;
  float: left;
  padding: 50px;
  background-color: rgba(27, 117, 187, 0.8);
}
.ca_product_banner_container{
  width: 1000px;
  position: relative;
  margin: 0 auto;
}
.ca_product_banner_section{
  position: relative;
  float: left;
  z-index: 3;
  width: 100%;
  background-color: transparent;
}
.ca_section1_1_pc{
  background-image: url('<?php echo base_url("assets/img/camino_bg_prevcare.jpg") ?>');
    background-repeat: no-repeat;
    padding-top: 0;
    background-size: auto 107%;
    background-position: top center;
    box-sizing: border-box;
    width: 100%;
    background-color: #1D1E22;
    position: relative;
}
.ca_section2_1_pc{
  background-image: url('<?php echo base_url("assets/img/camino-dental-care-cosmetic-dentistry-header-rev1.jpg") ?>');
    background-repeat: no-repeat;
    padding-top: 0;
    background-size: auto 100%;
    background-position: top center;
    box-sizing: border-box;
    width: 100%;
    background-color: #1D1E22;
    position: relative;
}
.ca_section3_1_pc{
  background-image: url('<?php echo base_url("assets/img/camino-dental-care-restorative-header.jpg") ?>');
    background-repeat: no-repeat;
    padding-top: 0;
    background-size: auto 100%;
    background-position: top center;
    box-sizing: border-box;
    width: 100%;
    background-color: #1D1E22;
    position: relative;
}
.ca_section5_1_pc{
  background-image: url('<?php echo base_url("assets/img/camino-dental-care-pediatric-header.jpg") ?>');
    background-repeat: no-repeat;
    padding-top: 0;
    background-size: auto 100%;
    background-position: top center;
    box-sizing: border-box;
    width: 100%;
    background-color: #1D1E22;
    position: relative;
}
.ca_section6_1_pc{
  background-image: url('<?php echo base_url("assets/img/camino-dental-care-other-header.jpg") ?>');
    background-repeat: no-repeat;
    padding-top: 0;
    background-size: auto 100%;
    background-position: top center;
    box-sizing: border-box;
    width: 100%;
    background-color: #1D1E22;
    position: relative;
}
#scroll_target{
  position: absolute;
  width: 20px;
  top: 0;
  text-align: center;
  left: 0;
  margin-top: 22px;
}
.te_section1_img_div_slider{
    color: #FFFFFF;
    position: absolute;
    float: left;
    width: 705px;
    bottom: 41%;
}
.te_scroll {
   -webkit-animation: flickerAnimation 3.5s infinite;
   -moz-animation: flickerAnimation 3.5s infinite;
   -o-animation: flickerAnimation 3.5s infinite;
    animation: flickerAnimation 3.5s infinite;
}
.te_footer_text1-1{
  font-size: 10px;
    color: #000000;
    text-align: right;
}
.te_footer_text2-2{
  font-size: 10px;
    color: #000000;
    text-align: right;
}
.te_footer2-1{
  float: left;
    width: 100%;
    box-sizing: border-box;
    background-color: #FEDD14;padding-top: 15px;
    margin-bottom: 0px;
    padding-bottom: 30px;
}
.te_send_div{
  width: 91%;
  text-align: right;
  margin-top: -8px;
}
.te_send_btn{
   padding: 1px 10px 1px 10px;
    background-color: #5A5959;
    cursor: pointer;
    border: 2px solid #797979;
    font-family: "Titillium Web";
    color: #FFF;
    font-size: 20px;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
input.te_send_btn:hover{
      background-color: #EE9949;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
#map {
    width: 100%;
    height: 350px;
    background-color: #CCC;
    }
.te_contact_textarea{
  background: transparent;
    border-bottom: 2px solid #797979;
    border-top: 0;
    border-right: 0;
    border-left: 0;
    font-size: 17px;
    font-family: "Titillium Web";
    color: #5A5A5A;
    margin-bottom: 0;
    resize:none;
        width: 90%;height: 120px;
}
.te_footer1_center{
  width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    padding-top: 0;
    padding-bottom: 60px;
    text-align: left;
}
.te_left_div_footer_container{
  width: 100%;
}
.te_footer_links_span{
  width: 100%;
}
.te_footer_links{
  display: table;
    height: 87px;
    width: 100%;
}
.te_footer_links li{
  display: table-cell;
    height: 87px;
    width: 16.666666667%;
    line-height: 87px;
    text-align: center;
    background: #ddd;
    border-right: 1px solid #fff;
}
.te_left_side_areas{
    width: 49.999%;
    float:left;
}
.te_right_side_areas{
    width: 49.999%;
    float:left;
}
.te_footer_links_div{
  font-family: "Lato",Open Sans, Helvetica;
  padding: 12px 0;
}
.te_footer_links_bold{
  font-weight: 700;
    color: #525252;
    font-size: 13px;
}
.te_footer_links_normal{
      font-weight: 400;
    color: #888888;
    font-size: 13px;
}
.te_footer_brands{
  width: 100%;
  padding-top: 65px;
}
.te_footer_links_div_mid{
  font-family: "Lato",Open Sans, Helvetica;
    padding: 12px 0;
}
.te_footer_links_div_right{
  font-family: "Lato",Open Sans, Helvetica;
    padding: 12px 0;
}
.te_left_div_footer{
  width: 30%;
  float: left;
    box-sizing: border-box;
    padding: 10px;
}
.te_left_div_footer1{
  width: 49.999%;
  float: left;
    box-sizing: border-box;
    padding: 10px;
}
.te_right_div_footer1{
  width: 49.999%;
  float: left;
    box-sizing: border-box;
    padding: 10px;
    margin-top: 32px;
}
.te_middle_div_footer{
  width: 30%;
  float: left;
      box-sizing: border-box;
    padding: 10px;
}
.te_right_div_footer{
  width: 40%;
  float: left;
      box-sizing: border-box;
    padding: 10px;
}
.te_logo_white{
  width: 100%;
  display: none;
}
.te_logo_black{
  width: 100%;
  display: inline-block;
}
.te_section1-2{
padding-top: 0;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_img_items_title_text{
  color: #404041;
    font-family: "Titillium Web",Lato,Helvetica;
    font-weight: 200;
}
.te_img_items_title{
  font-family: "Titillium Web",Helvetica;
    text-align: left;
    font-size: 24px;
    margin-bottom: 6px;
}
.te_spacer{
  width: 100%;
    float: left;
    height: 63px;
}
.te_section4-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_img_items_desc_text{
  color: #808284;
    font-family: "Open Sans",Helvetica;
    text-align: justify;
    font-size: 15px;
    font-weight: 200;
}
.te_section14-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section13-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section12-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section11-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section10-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section9-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section8-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section7-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section6-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_section5-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
img.te_img_items{
  width: 100%;
}
.te_contact_text{
  background: transparent;
    border-bottom: 2px solid #797979;
    border-top: 0;
    border-right: 0;
    border-left: 0;
    font-size: 17px;
    font-family: Titillium Web;
    color: #5A5A5A;
    margin-bottom: 5px;
        width: 90%;
}
.te_footer2{
  background-color: #FEDD14;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_footer1{
  background-color: #EFEFEF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
li.te_menu_items_sub.current{
  /*color:rgb(255, 234, 107);*/
}
.te_footer1_container{
  width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    padding-top: 42px;
    padding-bottom: 60px;
    text-align: left;
}
.te_img_items_desc{
  padding: 7px 0;
    line-height: 26px;
}
.te_separator{
  width: 930px;
    border-bottom: 2px solid #B3B3B3;
    float: left;
}
.te_separator1{
    display: none;
    width: 100%;
    border-bottom: 2px solid #D8D8D8;
    float: left;
}
.te_section3-2{
    background-color: #FFFFFF;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
        float: left;
}
.te_left_div{
   margin-top: 10px;
  float:left;
  width: 49.999%;
  box-sizing:border-box;
  padding: 0 30px 0 0;
}
.te_right_div{
  float:left;
  width: 49.999%;
  box-sizing:border-box;
  padding: 0 0 0 30px;
}
.te_section2_container_desc{
      width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    padding-top: 20px;
    padding-bottom: 60px;
    text-align: center;
}
.te_section2_container_title{
  width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    padding-top: 60px;
    padding-bottom: 0;
    text-align: center;
}
.te_section2-2{
  background-color: #FEDD14;
    margin-top: -10px;
    box-sizing: border-box;
    width: 100%;
}
.te_img12{
  width: 100%;
}
.te_section2_text_title{
  color: #404041;
    font-size: 40px;
    font-weight: 200;
}
i.te_scroll{
    font-size: 87px;
    color: #27a9e1;
}
.ca_section1_1_rev1_b{
background-image: url('<?php echo base_url("assets/img/home-slider-3b.jpg") ?>');
background-repeat: no-repeat;
padding-top: 0;
background-size: auto 100%;
background-position: top right;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.ca_section1_1_rev1_a{
background-image: url('<?php echo base_url("assets/img/home-slider-2b.jpg") ?>');
background-repeat: no-repeat;
padding-top: 0;
background-size: auto 100%;
background-position: top right;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_section1_1_2{
background-image: url('<?php echo base_url("assets/img/ca_banner_bg1.jpg") ?>');
background-repeat: no-repeat;
padding-top: 0;
background-size: auto 100%;
background-position: top right;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_section1_1{
background-image: url('<?php echo base_url("assets/img/ca_banner_bg1.jpg") ?>');
background-repeat: no-repeat;
padding-top: 0;
background-size: auto 100%;
background-position: top right;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
/*
.te_section1_2{
background-image: url('../img/True_Electro-11.jpg');
background-repeat: no-repeat;
padding-top: 0;
background-size: 103%;
background-position: bottom center;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_section1_3{
background-image: url('../img/True_Electro-12.jpg');
background-repeat: no-repeat;
padding-top: 0;
background-size: 103%;
background-position: bottom center;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_section1_4{
background-image: url('../img/True_Electro-13.jpg');
background-repeat: no-repeat;
padding-top: 0;
background-size: 103%;
background-position: bottom center;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_section1_5{
background-image: url('../img/True_Electro-14.jpg');
background-repeat: no-repeat;
padding-top: 0;
background-size: 103%;
background-position: bottom center;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}
.te_section1_6{
background-image: url('../img/True_Electro-15.jpg');
background-repeat: no-repeat;
padding-top: 0;
background-size: 103%;
background-position: bottom center;
box-sizing:border-box;
width: 100%;
background-color: #1D1E22;
}*/
#banner_1{
    margin-bottom: 0;
}
#banner_2{
    margin-bottom: 0;
}
#banner_3{
    margin-bottom: 4%;
}
#banner_4{
    margin-bottom: 2%;
}
#banner_5{
    margin-bottom: -3%;
}
.te_pointer{
      position: absolute;
    left: -4px;
    padding-top: 9px;
}
.te_section1_container{
  visibility: hidden;
  width: 371px;
    box-sizing: border-box;
    position: relative;
    margin: 0 60.5% 0 auto;
    text-align: center;
}
.te_section1_img_div{
    position: absolute;
    width: 100%;
    margin-top: 18%;
    top: 0; 
    left: 0;
    float: left;
    text-align: left;
}
.te_footer_text2{
  font-family: "Lato";
  font-size: 10px;
  color: #B0B0B1;
  text-align: right;
}
.te_footer_text1{
  font-size: 10px;
  color: #B0B0B1;
  text-align: right;
}
.te_footer_links_div_right1{
    padding-top: 31px;
    font-family: "Lato",Open Sans,Helvetica;
}
.te_footer_container{
  width: 900px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    padding-top: 0;
    text-align: right;
}
.te_footer{
  width: 100%;
  box-sizing: border-box;
  background-color: #404042;
      height: 61px;
}
.te_section4_items_left{
  float: left;
  width: 20%;
}
.te_section4_items_right{
  float: left;
  width: 80%;
  text-align: left;
}
.te_section4_title_text{
  color:#B0B0B1;
  font-weight: 700;
}
.te_section4_desc_text{
  color:#D3D4D6;
  line-height: 22px;
    font-weight: 400;
}
.te_section4_items{
  float: left;
  box-sizing: border-box;
  width: 33.333%;
  text-align: center;
  padding-bottom: 60px;
}
.te_section4_1{
background-color: #e2f4fe;
padding: 448px 0 85px 0;
box-sizing:border-box;
width: 100%;
float: left;
}
.te_section4{
background-image: url('<?php echo base_url("assets/img/ca_section2_bg2.jpg") ?>');
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: top center;
padding: 85px 0;
box-sizing:border-box;
width: 100%;
float: left;
overflow-x:hidden; 
}
.te_section3_items_desc_div{
    cursor: pointer;
}
.te_section4_container{
  width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    text-align: center;
}
.te_section3_img{
  height: 60px;
    /*-webkit-transition:opacity 0.1s ease;
    -moz-transition:opacity 0.1s ease;
    -o-transition:opacity 0.1s ease;
    transition:opacity 0.1s ease;*/
}
.te_section3_items:hover .te_section3_img,.te_section3_items:hover .te_section3_items_desc_text{
    opacity: 0.5;
}
.te_section3_items_desc_text{
    font-size: 18px;
    /*-webkit-transition:opacity 0.1s ease;
    -moz-transition:opacity 0.1s ease;
    -o-transition:opacity 0.1s ease;
    transition:opacity 0.1s ease;*/
}
.te_section3_items{
  float: left;
  box-sizing: border-box;
  width: 20%;
  text-align: center;
  padding-bottom: 60px;
}
.te_section3_items_icon{
  width: 100%;
  padding-bottom:10px;
    cursor: pointer;
}
.te_section3{
  position: relative;
  background-color:#3472b9;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
    padding: 60px 0 60px 0;
}
.te_section3_container{
  width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    text-align: center;
}
.te_section2{
  background-image: url('<?php echo base_url("assets/img/ca_section1_bg3.jpg") ?>');
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: top center;
    /* padding-top: 0; */
    padding: 70px 0 70px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;
}
.te_menu_btn{
  color: #FFFFFF;
}
.te_menu_a1{
  color: #6d6e70;
}
.te_menu_a1:hover{
  color: #1b75bb;
}
.te_sub_menu{
  color:#6d6e70;
}
.te_sub_menu:hover{
  color: #1b75bb;
}
.te_section2_container{
 width: 930px;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    /* padding-top: 90px; */
    /* padding-bottom: 90px; */
    text-align: center;
    /* float: left; */
}
.te_section2_text{
  text-align: center;
    color: #404041;
    font-weight: 400;
    font-size: 20px;
}
.te_section3 .te_section2_text_home{
    text-align: center;
    color: #FFF;
    font-weight: 200;
    font-size: 20px;
    font-family: 'Fira Sans';
    line-height: 1.5;
}
.te_section2_text_home{
    text-align: center;
    color: #808284;
    font-weight: 200;
    font-size: 20px;
    font-family: 'Fira Sans';
    line-height: 1.5;
}
.te_section2_text_home_a{
    text-align: center;
    color: #FFF;
    font-weight: 200;
    font-size: 20px;
    font-family: 'Fira Sans';
    line-height: 1.5;
}
.te_section2_text_title_home_a{
  padding-bottom: 10px;
    text-align: center;
    color: #FFF;
    font-weight: 200;
    font-size: 30px;
    font-family: 'Fira Sans';
    line-height: 1.5;
}
.te_overlay{
    position: fixed;
    z-index: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.95);
    -webkit-transition:opacity 0.5s ease;
    -moz-transition:opacity 0.5s ease;
    -o-transition:opacity 0.5s ease;
    transition:opacity 0.5s ease;
    opacity: 0;
}
.te_side_nav{
  width: 100%;
  height: 100%;
  position: fixed;
  z-index: 9999;
  left: -100%;
  -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
    -webkit-backface-visibility:hidden; /*Most Important*/
}
.te_side_nav1_content2{

}
.te_close_btn{
  width: 20px;
  cursor: pointer;
}
ul{
  text-decoration: none;
  list-style: none;
  cursor: pointer;
}
ul.te_menu_items{
  padding-left: 10px;
}
ul.te_menu_items_sub{
    position: relative;
    margin-left: 135px;
    top: 0;
    margin-top: -45px;
    width: 209px;
    border-left: 7px solid #C6E9FA;
    padding-left: 50px;
}
li.te_menu_items_sub_nav2{
  margin-bottom: 21px;
    font-size: 15px;
    font-family: 'Roboto';
    font-weight: 200;
    color: #58585b;
    display: none;
}
ul.te_menu_items_sub_nav2{
  border-left: 7px solid #C6E9FA;
    padding-left: 50px
}
li.te_menu_items{
  margin-bottom: 23px;
    font-size: 20px;
    font-weight: 200;
    font-family: 'Dosis';
}
li.te_menu_items_sub{
  font-family: 'Roboto';
  font-weight: 200;
  margin-bottom: 21px;
    font-size: 15px;
    color: #58585b;
}
li.te_menu_items_sub .current{
    /*color: #1b75bb;*/
}
li.te_menu_items:hover{
  color: rgb(255, 234, 107);
}
li.te_menu_items_sub:hover .ca_pointer_menu{
  opacity: 1;
}
li.te_menu_items_sub:hover .ca_menu_text{
  color: #1b75bb;
}
li.te_menu_items_sub_nav2:hover{
  color: #1b75bb;
}

.te_side_nav1_left{
  text-align: center;
    float: left;
    box-sizing: border-box;
    padding: 0 0 0 22px;
    position: relative;
    top: 0;
    margin-top: -8px;
    width: 53px;
}
.te_side_nav1_right{
  float: left;
  width: 90%;
  box-sizing: border-box;
    padding: 10px;
}
.te_section4-3 {
    background-color: #404042;
    padding-top: 0;
    box-sizing: border-box;
    width: 100%;
    margin-top: -10px;
    float: left;
}
.te_contact_content_container{
    border-left: 2px solid #FFFFFF;
    margin-left: 35px;
    padding-left: 26px;
margin-top: 15px;
}
.te_side_nav1{
  padding-left: 24px;
  background-color: transparent;
    height: 100%;
    padding-top: 144px;
    color: #FFFFFF;
    box-sizing: border-box;
    float: left;
        position: relative;
    z-index: 4;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.te_side_nav2{
  display: none;
  padding-left: 6px;
  background-color: transparent;
    width: 388px;
    padding-top: 0;
    color: #FFFFFF;
    box-sizing: border-box;
    float: left;
        position: relative;
    z-index: 4;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
}
.te_top_nav{
  background-color: rgba(64, 64, 66,0);
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0),0 17px 50px 0 rgba(0,0,0,0);
    z-index: 999;
    width: 100%;
    position: fixed;
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    transition:all 0.3s ease;
    -webkit-backface-visibility:hidden; /*Most Important*/
}
.te_top_nav_container{
  width: 100%;
    box-sizing: border-box;
    position: relative;
    margin: 0 auto;
    padding-top: 28px;
}
.te_left_top_nav{
  width: 150px;
    font-size: 30px;
    float: left;
    color: #FFFFFF;
    padding-left: 39px;
}
.te_right_top_nav{
  width: 150px;
    float: right;
    padding-right: 39px;
}
.te_logo{
  width: 100%;
}
.te_img3{
  width: 202px;
}
.current{
  color: #1b75bb;
}
.hidden1{
  opacity: 0;
}
.current_menu{
  border-top:7px solid yellow;
}
.current_menu1{
  background-color: #8FBFD0;
}
.ca_current_alt2{
  border-left: 2px solid #ff0;
}
    </style>
    <title>Camino Dental Care | <?php echo $title ?></title>
    <!--link rel="stylesheet" href="<?php echo base_url('assets/css/stylesheet.css') ?>" /-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,700|Fira+Sans:400,700,300,500' rel='stylesheet' type='text/css'>
    <!--link rel="stylesheet" href="<?php echo base_url('../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>" /-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.css" />
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!--link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>" /-->
  </head>
  <body>