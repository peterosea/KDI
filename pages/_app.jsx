import { GridThemeProvider } from 'styled-bootstrap-grid';
import { createGlobalStyle, ThemeProvider } from 'styled-components';
import Theme from '@/styles/Theme';
import Grid from '@/styles/Grid';

const GlobalStyle = createGlobalStyle`
  * {
    box-sizing: border-box;
  }
`;

function App({ Component, pageProps }) {
  return (
    <ThemeProvider theme={Theme}>
      <GridThemeProvider gridTheme={Grid}>
        <>
          <GlobalStyle />
          <Component {...pageProps} />
        </>
      </GridThemeProvider>
    </ThemeProvider>
  );
}

export default App;
