import Head from 'next/head';
// components
import Layout from '@c/Layout';

export default function Home() {
  return (
    <>
      <Head>
        <title>Create Next App</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Layout></Layout>
    </>
  );
}
