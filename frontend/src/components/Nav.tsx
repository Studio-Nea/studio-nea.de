import { Link, others, ResponsiveValue } from "@chakra-ui/react";

const commonProps: any = {
    position: 'absolute',
    textTransform: 'uppercase',
    color: 'white',
    fontFamiliy: 'GT-Haptik-Medium',
}

const menuItems = [{
    label: 'Shop',
    href: '/shop',
    styles: {
        ...commonProps,
        top: '40px',
        left: '50%',
        transform: 'translateX(-50%)'
    }
}, {
    label: 'Contact',
    href: '/contact',
    styles: {
        ...commonProps,
        top: '50%',
        right: '0',
        transform: 'translateY(-50%) rotate(90deg)'
    }
}, {
    label: 'Work',
    href: '/work',
    styles: {
        ...commonProps,
        bottom: '40px',
        left: '50%',
        transform: 'translateX(-50%)'
    }
}, {
    label: 'Studio',
    href: '/studio',
    styles: {
        ...commonProps,
        top: '50%',
        left: '0',
        transform: 'translateY(-50%) rotate(-90deg)'
    }
}]

export default function Navigation () {
    return (<>
        {menuItems.map((item) => (
            <Link href={item.href} {...item.styles} fontSize={'xxx-large'}>{item.label}</Link>
        ))} 
    </>);
}