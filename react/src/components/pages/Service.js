import React from "react";
import service_icon_1 from '../../assets/img/service/3-protection-1.png';
import service_icon_2 from '../../assets/img/service/10-server-1.png';
import service_icon_3 from '../../assets/img/service/2-database-1.png';
import service_icon_4 from '../../assets/img/service/16-antivirus-1.png';
import service_icon_5 from '../../assets/img/service/4-payment-protection-1.png';
import service_icon_6 from '../../assets/img/service/3-protection-1.png';
import service_icon_7 from '../../assets/img/service/18-laptop-1.png';
import service_icon_8 from '../../assets/img/service/11-secret-1.png';
import service_icon_9 from '../../assets/img/service/25-shopping-online-1.png';
import { NavLink } from "react-router-dom";




const Service = () => {
    return (
        <>
        <section className="page-banner">
            <div className="container">
                <div className="banner-title">
                    <h1>service</h1>
                    <p>Home / <span>Service</span></p>
                </div>
            </div>
        </section>
        <section className="space_top_bottom pt-100 pb-70">
  <div className="about-us-area">
   <div className="container">
    <div className="row">
     <div className="col-lg-6">
      <div className="about-img mb_30"><img src="https://hsoccybernew.vcanaglobal.ga/design/wp-content/uploads/sites/48/2021/06/what.jpg" alt="icon" /></div>
     </div>
     <div className="col-lg-6">
      <div className="about-content">
       <div className="about-title">
        <h2>What We Do</h2>
       </div>
       <div className="react-tabs" data-tabs="true">
        <p>The HSOC Cyber Roadmap indicates what you will do as you become more proficient and independent in your cybersecurity career journey.  You will also build, learn, and practice real skills that last, create value, and produce observable change that make it easy for you to be noticed, known, and heard.  Real skill employers desire are:</p>
      </div>
      </div>
     </div>
    </div>
		<div className="row">
        <div className="col-lg-12">
		 <ul className="listdc">
            <li><strong>Self-Control:</strong> Completing tasks and projects without letting distractors or bad habits get in the way (e.g., adaptability, self-awareness, self-confidence, stress management) </li>
            <li><strong>Productivity:</strong> Using your non-vocational skills and commitment to complete tasks (e.g., attention to detail, crisis management, effective decision making, troubleshooting)</li>
            <li><strong>Wisdom:</strong> Real-world skills applied based off experience, knowledge, and good judgment (e.g., conflict resolution instincts, creativity in the face of challenges, critical thinking, supervising with confidence)</li>
            <li><strong>Perception:</strong> Experience and practice that provide insight to point things out with courage and without influence from others (e.g., designing, mapping, judging people and situations, strategic thinking)</li>
            <li><strong>Influence:</strong> The skills needed to inspire others to act (e.g., constructive criticism, presentation skills, team building, writing for impact)</li>
		</ul>
		</div>
   </div>
   </div>
  </div>
 </section>
 <section className="service_bg_light_blue">
 <div className="servicebackground_overlay"></div>
     <div className="container">
         <div className="row">
             <div className="col-lg-12 text-center">
                 <div className="serv_top_heading">
                     <h3>Services</h3>
                     <h2>Our Professional Service</h2>
                 </div>
             </div>
         </div>
         <div className="row">
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_1} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3> Network Protections</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_2} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Server Protection</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_3} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Secure IT Infrastructure</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_4} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Vulnerability Assessment</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_5} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Payment Protections</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_6} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Secure Transactions</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_7} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Antivirus</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_8} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3>Spam Protections</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div className="col-lg-4">
                 <div className="service_inner">
                     <div className="service_box">
                         <div className="service_icon">
                             <img src={service_icon_9} alt="icon" />
                         </div>
                         <div className="service_info">
                             <h3> Secure Transactions</h3>
                             <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section className="our_work">
     <div className="container">
         <div className="row ml-auto">
             <div className="col-lg-6">
                 <div className="our_serv_section">
                     <h2>Our work will make you feel better.</h2>
                     <p>Montes felis quam pretium luctus velit blandit vestibulum interdum efficitur.</p>
                 </div>
             </div>
             <div className="col-lg-6">
                 <div className="video_play">
                 <NavLink id="play-video" className="video-play-button" to='/'>
                 <span></span>
                 </NavLink>
                 {/* <a id="play-video" className="video-play-button" href="#">
                 <span></span>
                </a> */}
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section className="why_choose_bg">
     <div className="container">
         <div className="row">
             <div className="col-lg-6">
                 <div className="why_choose_inner">
                     <h3>Why Choose Us</h3>
                     <h2>Our business is protecting yours</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                     <NavLink to='/' className='btn btn_discmre' >
                     Discover More
                     </NavLink>
                 </div>
             </div>
             <div className="col-lg-6">
                     <div className="row">
                         <div className="col-lg-6">
                         <div className="trst_company">
                             <div className="trst_inner">
                                 <div className="trst_icon">
                                 <i class="fas fa-shield-check"></i>
                                 </div>
                                 <div className="trst_info">
                                     <h3>Trusted Company</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus consectetur maximus interdum eros</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div className="col-lg-6">
                         <div className="trst_company">
                             <div className="trst_inner">
                                 <div className="trst_icon">
                                 <i class="fas fa-jedi"></i>
                                 </div>
                                 <div className="trst_info">
                                     <h3>Expertise</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus consectetur maximus interdum eros</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div className="col-lg-6">
                         <div className="trst_company">
                             <div className="trst_inner">
                                 <div className="trst_icon">
                                 <i class="fas fa-lock-alt"></i>
                                 </div>
                                 <div className="trst_info">
                                     <h3>System Protection</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus consectetur maximus interdum eros</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div className="col-lg-6">
                         <div className="trst_company">
                             <div className="trst_inner">
                                 <div className="trst_icon">
                                 <i class="fas fa-comments-alt"></i>
                                 </div>
                                 <div className="trst_info">
                                     <h3>24/7 Support</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus consectetur maximus interdum eros</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
        </>
    )
}

export default Service;