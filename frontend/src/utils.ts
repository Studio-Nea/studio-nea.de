import { headers, API_BASE_URL } from './contants';

export const request = async (uri: string) => {
  const res = await fetch(API_BASE_URL + uri, {
    method: 'GET',
    headers
  });
  return res.json();
}
