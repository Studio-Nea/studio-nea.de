import { Container } from '../components/Container'
import { request } from '../utils';

const Pages = ({ data }) => {
    return (
        <Container height="100vh">
            {data.content.text}
        </Container>
    )
}

export async function getStaticProps ({ params }) {
    const data = await request(`/pages/${params.slug}`);
    return { props: data }
}

export async function getStaticPaths() {
    const { data } = await request(`/site/children`);
    return {
        paths: data.map((site) => (
          { params: { slug: site.id } }
        )),
        fallback: false
    };
}

export default Pages
