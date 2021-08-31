<template>
<div>
    <Navbar />
    <Header />
    <Offering />
    <About />
    <Resume />
    <Project />
 <Testimonial />
    <Hire />
    
    </div>
    
</template>
<script>
import Navbar from './Navbar.vue'; 
import Header from './Header.vue';
import Offering from './Offering.vue';
import About from './About.vue';
import Resume from './Resume.vue';
import Project from './Projects.vue';
import Hire from './Hire.vue';
import Testimonial from './Testimoial.vue';
export default {
    components:{
        Navbar,
        Header,
        Offering,
        About,
        Resume,
        Project,
        Testimonial,
        Hire
        
        
        
    },
 mounted() {
            console.log('Home Component mounted.')
        }

}
</script>
