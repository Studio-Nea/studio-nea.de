export const FONTS = [
  '/fonts/GT-Haptik-Light.woff2',
  '/fonts/GT-Haptik-Light.woff',
  '/fonts/GT-Haptik-Light-Rotalic.woff2',
  '/fonts/GT-Haptik-Light-Rotalic.woff',
  '/fonts/GT-Haptik-Light-Oblique.woff2',
  '/fonts/GT-Haptik-Light-Oblique.woff',
  '/fonts/GT-Haptik-Regular.woff2',
  '/fonts/GT-Haptik-Regular.woff',
  '/fonts/GT-Haptik-Regular-Rotalic.woff2',
  '/fonts/GT-Haptik-Regular-Rotalic.woff',
  '/fonts/GT-Haptik-Regular-Oblique.woff2',
  '/fonts/GT-Haptik-Regular-Oblique.woff',
  '/fonts/GT-Haptik-Medium.woff2',
  '/fonts/GT-Haptik-Medium.woff',
  '/fonts/GT-Haptik-Medium-Rotalic.woff2',
  '/fonts/GT-Haptik-Medium-Rotalic.woff',
  '/fonts/GT-Haptik-Medium-Oblique.woff2',
  '/fonts/GT-Haptik-Medium-Oblique.woff',
  '/fonts/Ardmore-Display.woff2',
  '/fonts/Ardmore-Display.woff'
]

export const API_BASE_URL = process.env.API_BASE_URL || 'http://localhost:8888/api';
export const headers = new Headers()
headers.set(
  'Authorization',
  `Basic ${btoa('hallo@studio-nea.de:CUmGB959LAuM3SX3')}`
);
