// types/swiper.d.ts
declare module 'swiper' {
    export interface SwiperOptions {
        modules?: any[];
        loop?: boolean;
        pagination?: {
            el: string;
            clickable: boolean;
        };
        autoplay?: {
            delay: number;
        };
    }

    export class Swiper {
        constructor(container: string | HTMLElement, options?: SwiperOptions);
    }

    export default Swiper;
}

declare module 'swiper/modules' {
    export const Autoplay: any;
    export const Pagination: any;
    export const Navigation: any;
}

declare module 'swiper/css';
declare module 'swiper/css/pagination';
declare module 'swiper/css/autoplay';
