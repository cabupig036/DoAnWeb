/* PC */
@media (min-width: 64em){
    .pc{
        display: block;
    }
}

/* Tablet & Mobile*/
@media (max-width: 63.9375em){
    .place-btn,.contact-btn{
        padding: 15px 26px;
    }
    .social-list,.ti-instagram {
        font-size: 30px;
        margin:0 8px;
    }
    .contact-info {
        line-height: 1.5;
    }
    .row{
        margin-top: 8px;
    }
}
/* Tablet */
@media (min-width: 46.25em ) and(max-width: 63.9375em){
    .tablet{
        display: block;
    }
}
/* Mobile */
@media (max-width: 46.1875em){
    
    #header .mobile-menu-btn{
        display: block;
    }
    #header{
        overflow: hidden;
       }
    .s-full-width,
    .s-col-ful
    {
        width: 100%;
    }
    .s-mt-16{
        margin-top: 16px !important;
    }
    .s-mt-8{
        margin-top: 8px !important;
    }
    .contact-info{
        margin: 16px 0;
    }
    #nav{
        display: block;
    }
    #nav > li{
        display: block;
    }
    #nav .subnav{
        position:initial;
    }
    #nav .subnav{
        background-color: whitesmoke ;
    }
    #nav .subnav a{
        padding: 0 41px;
    }
    #content .member-item{
        width: 100%;
        padding: 0;
    }
    #content .img{
        width: 60%;
    }
    .search-btn{
        display: none;
    }
    
}