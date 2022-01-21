import { extendTheme } from '@chakra-ui/react'
import { createBreakpoints } from '@chakra-ui/theme-tools'

const fonts = { mono: `'Menlo', monospace` }

const breakpoints = createBreakpoints({
  sm: '40em',
  md: '52em',
  lg: '64em',
  xl: '80em',
})

const theme = extendTheme({
  styles: {
    global: {
      body: {
        color: 'white',
        fontFamily: 'GT-Haptik-Regular',
        cursor: "url(\"data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='16' cy='16' r='15' fill='%23000000' fill-rule='evenodd'/%3E%3C/svg%3E\") 32 32, auto"
      }
    }
  },
  colors: {
    black: '#16161D',
    nea: {
      selection: '#DC302B',
      bgStudio: '#DC302B',
      bgContact: '#2C5993',
      bgStart: '#EFA3C0',
      bgShop: 'white',
    }
  },
  fonts,
  breakpoints,
})

export default theme
