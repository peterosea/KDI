import React from 'react';
import Link from 'next/link';
// components
import { Root, Menu, Container, Row, Col } from './style';

const GNB = () => {
  return (
    <Root>
      <Container>
        <Row>
          <Col.Logo col={2}>Logo</Col.Logo>
          <Col col>
            <Menu>
              <Menu.List>
                <Link href="/">회사소개</Link>
              </Menu.List>
              <Menu.List>
                <Link href="/">사업분야</Link>
              </Menu.List>
              <Menu.List>
                <Link href="/">제품소개</Link>
              </Menu.List>
              <Menu.List>
                <Link href="/">인제경영</Link>
              </Menu.List>
              <Menu.List>
                <Link href="/">홍보센터</Link>
              </Menu.List>
            </Menu>
          </Col>
          <Col.translate col={2}>translate</Col.translate>
        </Row>
      </Container>
    </Root>
  );
};

export default GNB;
