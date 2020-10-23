import styled, { css } from 'styled-components';
import { Container, Row, Col } from 'styled-bootstrap-grid';

const Root = styled.div`
  border-top: 1px solid #eee;
  margin-top: 300px;
  text-align: right;
`;
Col.Logo = styled(Col)`
  display: flex;
  align-items: center;
  justify-content: center;
`;

const DimSpan = styled.span`
  color: #eee;
`;

const SnsIcon = styled.div`
  font-size: 24px;
  overflow: hidden;
  line-height: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  ${({ square }) =>
    square &&
    css`
      color: #fff;
      background-color: #000;
      border-radius: 5px;
      font-size: 0.8rem;
      padding: 0.2rem;
    `}
`;

const Flex1 = styled.div`
  display: flex;
  align-items: center;
  justify-content: flex-end;
`;
const FlexUl = styled.ul`
  display: flex;
  align-items: center;
  li {
    list-style: none;
    margin-right: 8px;
    font-weight: bold;
  }
`;

export { Root, Container, Row, Col, DimSpan, SnsIcon, FlexUl, Flex1 };
