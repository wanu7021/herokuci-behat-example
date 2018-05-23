<?php
# features/bootstrap/FeatureContext.php
 
require("add.php");
 
use Behat\Behat\Context\BehatContext, 
    Behat\Behat\Exception\PendingException;
 
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
     
class FeatureContext extends BehatContext {

  private $a;
  private $b;
  private $sum;
  
  /**
   * @Given /^I provide the number (\d+) and the number (\d+)$/
   */
  public function iProvideTheNumberAndTheNumber($a, $b) {
      $this->a = $a;
      $this->b = $b;
  }

  /**
   * @When /^I add the numbers$/
   */
  public function iAddTheNumbers() {
    $Add = new Add();
    $this->sum = $Add->add($this->a, $this->b);
  }

  /** 
   * @Then /^I should get (\d+)$/ 
   */
  public function iShouldGet($res) {
    if ($this->sum != $res) {
        throw new Exception("Actual sum: ".$this->sum);
    }
  }
}
?>