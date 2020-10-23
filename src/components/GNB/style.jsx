import styled from 'styled-components';
import { Container, Row, Col } from 'styled-bootstrap-grid';

const Root = styled.div`
  background-color: transparent;
  box-shadow: 0px 3px 5px 1px rgba(0, 0, 0, 0.1);
  width: 100vw;
  position: fixed;
  top: 0;
  z-index: 900;
`;

const Menu = styled.div`
  display: flex;
`;

Menu.List = styled.div`
  padding: 16px;
  a {
    font-weight: bold;
    text-decoration: none;
    color: white;
  }
`;

Col.Logo = styled(Col)`
  display: flex;
  align-items: center;
  justify-content: center;
`;

Col.translate = styled(Col)`
  display: flex;
  align-items: center;
  justify-content: center;
`;

export { Container, Row, Col, Menu, Root };
