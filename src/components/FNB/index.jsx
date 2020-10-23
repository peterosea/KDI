import React from 'react';
import { FaFacebookF, FaTwitter, FaInstagram } from 'react-icons/fa';
// components
import {
  Root,
  Container,
  Row,
  Col,
  DimSpan,
  SnsIcon,
  FlexUl,
  Flex1,
} from './style';

const FNB = () => {
  return (
    <Root>
      <Container>
        <Row>
          <Col.Logo col={2}>Logo</Col.Logo>
          <Col col={2}></Col>
          <Col col={8}>
            <div>
              <Flex1>
                <FlexUl>
                  <li>이용약관</li>
                  <li>개인정보처리방침</li>
                </FlexUl>
                <FlexUl>
                  <li>
                    <SnsIcon square>
                      <FaFacebookF />
                    </SnsIcon>
                  </li>
                  <li>
                    <SnsIcon square>
                      <FaTwitter />
                    </SnsIcon>
                  </li>
                  <li>
                    <SnsIcon>
                      <FaInstagram />
                    </SnsIcon>
                  </li>
                </FlexUl>
              </Flex1>
              <DimSpan>
                Hanwha Copyright©2013 HANWHA GROUP ALLRIGHTS RESERVED.
              </DimSpan>
            </div>
          </Col>
        </Row>
      </Container>
    </Root>
  );
};

export default FNB;
