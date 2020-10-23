import Head from 'next/head';
import { Container, Row, Col } from 'styled-bootstrap-grid';
// components
import Layout from '@c/Layout';

export default function Home() {
  return (
    <>
      <Head>
        <title>Create Next App</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Layout>
        <Container>
          <Row>
            <Col col>test</Col>
          </Row>
        </Container>
      </Layout>
    </>
  );
}
