import NextDocument, { Html, Head, Main, NextScript } from 'next/document'
import { ColorModeScript } from '@chakra-ui/react'

import Nav from '../components/Nav';
import { FONTS } from '../contants';

export default class Document extends NextDocument {
  render() {
    return (
      <Html>
        <Head>
          {FONTS.map((font) => (
            <link rel="preload" href={font} as="font" crossOrigin="" />
          ))}
        </Head>
        <body>
          <Nav />
          {/* Make Color mode to persists when you refresh the page. */}
          <ColorModeScript />
          <Main />
          <NextScript />
        </body>
      </Html>
    )
  }
}
